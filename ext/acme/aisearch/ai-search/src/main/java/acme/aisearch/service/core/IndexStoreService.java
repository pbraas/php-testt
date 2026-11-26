package acme.aisearch.service.core;

import acme.aisearch.service.model.IndexUpsertRequest;
import acme.aisearch.service.model.SearchRequest;
import acme.aisearch.service.model.SearchResult;

import java.util.ArrayList;
import java.util.Comparator;
import java.util.HashSet;
import java.util.List;
import java.util.Locale;
import java.util.Map;
import java.util.Set;
import java.util.concurrent.ConcurrentHashMap;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class IndexStoreService {

    private final Map<String, IndexedDocument> documents = new ConcurrentHashMap<>();

    public int upsert(List<IndexUpsertRequest.Document> incoming) {
        if (incoming == null || incoming.isEmpty()) {
            return 0;
        }

        int count = 0;
        for (IndexUpsertRequest.Document doc : incoming) {
            if (doc == null || doc.getDocumentId() == null || doc.getDocumentId().isBlank()) {
                continue;
            }
            documents.put(
                    doc.getDocumentId(),
                    new IndexedDocument(
                            doc.getDocumentId(),
                            doc.getForumId(),
                            safe(doc.getTitle()),
                            safe(doc.getContent()),
                            safe(doc.getUrl())
                    )
            );
            count++;
        }
        return count;
    }

    public int deleteByDocumentIds(List<String> ids) {
        if (ids == null || ids.isEmpty()) {
            return 0;
        }

        int count = 0;
        for (String id : ids) {
            if (id == null || id.isBlank()) {
                continue;
            }
            if (documents.remove(id) != null) {
                count++;
            }
        }
        return count;
    }

    public int purgeAll() {
        int size = documents.size();
        documents.clear();
        return size;
    }

    public List<SearchResult> search(SearchRequest request, int topK) {
        String query = request == null ? "" : safe(request.getQuery()).trim();
        if (query.isEmpty()) {
            return List.of();
        }

        Set<Integer> allowedForumIds = extractForumFilter(request);
        List<String> tokens = tokenize(query);
        double alpha = hybridAlpha(request);

        List<Scored> ranked = new ArrayList<>();
        for (IndexedDocument doc : documents.values()) {
            if (!allowedForumIds.isEmpty() && (doc.forumId == null || !allowedForumIds.contains(doc.forumId))) {
                continue;
            }

            double lexical = lexicalScore(doc, tokens);
            if (lexical <= 0.0) {
                continue;
            }

            double semantic = semanticLikeScore(doc, query);
            double finalScore = isHybrid(request) ? ((1.0 - alpha) * lexical + alpha * semantic) : lexical;

            ranked.add(new Scored(doc, finalScore));
        }

        ranked.sort(Comparator.comparingDouble(Scored::score).reversed());
        List<SearchResult> out = new ArrayList<>();
        int limit = Math.min(Math.max(1, topK), ranked.size());

        for (int i = 0; i < limit; i++) {
            Scored scored = ranked.get(i);
            out.add(new SearchResult(
                    scored.doc.title,
                    buildSnippet(scored.doc.content, query),
                    scored.doc.url,
                    scored.score
            ));
        }
        return out;
    }

    private static Set<Integer> extractForumFilter(SearchRequest request) {
        if (request == null || request.getFilters() == null || request.getFilters().getForumIds() == null) {
            return Set.of();
        }
        return new HashSet<>(request.getFilters().getForumIds());
    }

    private static boolean isHybrid(SearchRequest request) {
        return request != null && "hybrid".equalsIgnoreCase(safe(request.getMode()));
    }

    private static double hybridAlpha(SearchRequest request) {
        if (request == null || request.getHybrid() == null || request.getHybrid().getAlpha() == null) {
            return 0.35;
        }
        return clamp(request.getHybrid().getAlpha(), 0.0, 1.0);
    }

    private static double lexicalScore(IndexedDocument doc, List<String> tokens) {
        String title = normalize(doc.title);
        String content = normalize(doc.content);
        double score = 0.0;

        for (String token : tokens) {
            int titleCount = occurrences(title, token);
            int contentCount = occurrences(content, token);
            score += (titleCount * 4.0) + (contentCount * 1.0);
        }
        return score;
    }

    private static double semanticLikeScore(IndexedDocument doc, String query) {
        Set<String> q = new HashSet<>(tokenize(query));
        Set<String> d = new HashSet<>(tokenize(doc.title + " " + doc.content));
        if (q.isEmpty() || d.isEmpty()) {
            return 0.0;
        }
        int intersection = 0;
        for (String token : q) {
            if (d.contains(token)) {
                intersection++;
            }
        }
        int union = q.size() + d.size() - intersection;
        return union == 0 ? 0.0 : ((double) intersection / (double) union);
    }

    private static List<String> tokenize(String text) {
        String normalized = normalize(text);
        if (normalized.isBlank()) {
            return List.of();
        }
        String[] parts = normalized.split("\\s+");
        List<String> out = new ArrayList<>(parts.length);
        for (String part : parts) {
            if (part.length() > 1) {
                out.add(part);
            }
        }
        return out;
    }

    private static String normalize(String text) {
        return safe(text)
                .toLowerCase(Locale.ROOT)
                .replaceAll("[^\\p{L}\\p{N}\\s]+", " ")
                .replaceAll("\\s+", " ")
                .trim();
    }

    private static String buildSnippet(String content, String query) {
        String plain = safe(content).replaceAll("\\s+", " ").trim();
        if (plain.isEmpty()) {
            return "";
        }

        List<String> queryTokens = tokenize(query);
        String firstToken = queryTokens.isEmpty() ? "" : queryTokens.getFirst();
        int position = -1;
        if (!firstToken.isEmpty()) {
            Matcher matcher = Pattern
                    .compile("\\b" + Pattern.quote(firstToken) + "\\b", Pattern.CASE_INSENSITIVE)
                    .matcher(plain);
            if (matcher.find()) {
                position = matcher.start();
            }
        }

        if (position < 0) {
            return truncate(plain, 220);
        }

        int start = Math.max(0, position - 80);
        int end = Math.min(plain.length(), start + 220);
        String cut = plain.substring(start, end);
        if (start > 0) {
            cut = "..." + cut;
        }
        if (end < plain.length()) {
            cut = cut + "...";
        }
        return cut;
    }

    private static int occurrences(String text, String token) {
        if (text.isBlank() || token.isBlank()) {
            return 0;
        }
        int count = 0;
        int from = 0;
        while (true) {
            int pos = text.indexOf(token, from);
            if (pos < 0) {
                return count;
            }
            count++;
            from = pos + token.length();
        }
    }

    private static String truncate(String value, int maxLen) {
        return value.length() <= maxLen ? value : value.substring(0, maxLen - 3) + "...";
    }

    private static String safe(String value) {
        return value == null ? "" : value;
    }

    private static double clamp(double value, double min, double max) {
        return Math.max(min, Math.min(max, value));
    }

    private record Scored(IndexedDocument doc, double score) {
    }
}

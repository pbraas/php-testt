package acme.aisearch.service.model;

import java.util.List;

public class SearchResponse {

    private String traceId;
    private List<SearchResult> results;

    public SearchResponse() {
    }

    public SearchResponse(String traceId, List<SearchResult> results) {
        this.traceId = traceId;
        this.results = results;
    }

    public String getTraceId() {
        return traceId;
    }

    public void setTraceId(String traceId) {
        this.traceId = traceId;
    }

    public List<SearchResult> getResults() {
        return results;
    }

    public void setResults(List<SearchResult> results) {
        this.results = results;
    }
}


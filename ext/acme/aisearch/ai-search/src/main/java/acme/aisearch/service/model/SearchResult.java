package acme.aisearch.service.model;

public class SearchResult {

    private String title;
    private String snippet;
    private String url;
    private double score;

    public SearchResult() {
    }

    public SearchResult(String title, String snippet, String url, double score) {
        this.title = title;
        this.snippet = snippet;
        this.url = url;
        this.score = score;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getSnippet() {
        return snippet;
    }

    public void setSnippet(String snippet) {
        this.snippet = snippet;
    }

    public String getUrl() {
        return url;
    }

    public void setUrl(String url) {
        this.url = url;
    }

    public double getScore() {
        return score;
    }

    public void setScore(double score) {
        this.score = score;
    }
}


package acme.aisearch.service.core;

final class IndexedDocument {

    String documentId;
    Integer forumId;
    String title;
    String content;
    String url;

    IndexedDocument(String documentId, Integer forumId, String title, String content, String url) {
        this.documentId = documentId;
        this.forumId = forumId;
        this.title = title;
        this.content = content;
        this.url = url;
    }
}


package acme.aisearch.service.model;

import java.util.List;

public class SearchRequest {

    private String traceId;
    private String query;
    private Integer topK;
    private Filters filters;
    private UserContext userContext;
    private String mode;
    private Hybrid hybrid;
    private Semantic semantic;

    public String getTraceId() {
        return traceId;
    }

    public void setTraceId(String traceId) {
        this.traceId = traceId;
    }

    public String getQuery() {
        return query;
    }

    public void setQuery(String query) {
        this.query = query;
    }

    public Integer getTopK() {
        return topK;
    }

    public void setTopK(Integer topK) {
        this.topK = topK;
    }

    public Filters getFilters() {
        return filters;
    }

    public void setFilters(Filters filters) {
        this.filters = filters;
    }

    public UserContext getUserContext() {
        return userContext;
    }

    public void setUserContext(UserContext userContext) {
        this.userContext = userContext;
    }

    public String getMode() {
        return mode;
    }

    public void setMode(String mode) {
        this.mode = mode;
    }

    public Hybrid getHybrid() {
        return hybrid;
    }

    public void setHybrid(Hybrid hybrid) {
        this.hybrid = hybrid;
    }

    public Semantic getSemantic() {
        return semantic;
    }

    public void setSemantic(Semantic semantic) {
        this.semantic = semantic;
    }

    public static class Filters {
        private List<Integer> forumIds;
        private List<String> visibility;

        public List<Integer> getForumIds() {
            return forumIds;
        }

        public void setForumIds(List<Integer> forumIds) {
            this.forumIds = forumIds;
        }

        public List<String> getVisibility() {
            return visibility;
        }

        public void setVisibility(List<String> visibility) {
            this.visibility = visibility;
        }
    }

    public static class UserContext {
        private Integer userId;
        private String lang;

        public Integer getUserId() {
            return userId;
        }

        public void setUserId(Integer userId) {
            this.userId = userId;
        }

        public String getLang() {
            return lang;
        }

        public void setLang(String lang) {
            this.lang = lang;
        }
    }

    public static class Hybrid {
        private Double alpha;

        public Double getAlpha() {
            return alpha;
        }

        public void setAlpha(Double alpha) {
            this.alpha = alpha;
        }
    }

    public static class Semantic {
        private Boolean enabled;
        private Integer topK;

        public Boolean getEnabled() {
            return enabled;
        }

        public void setEnabled(Boolean enabled) {
            this.enabled = enabled;
        }

        public Integer getTopK() {
            return topK;
        }

        public void setTopK(Integer topK) {
            this.topK = topK;
        }
    }
}


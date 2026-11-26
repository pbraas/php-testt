package acme.aisearch.service.model;

public class AckResponse {

    private boolean ok;
    private String traceId;
    private int count;

    public AckResponse() {
    }

    public AckResponse(boolean ok, String traceId, int count) {
        this.ok = ok;
        this.traceId = traceId;
        this.count = count;
    }

    public boolean isOk() {
        return ok;
    }

    public void setOk(boolean ok) {
        this.ok = ok;
    }

    public String getTraceId() {
        return traceId;
    }

    public void setTraceId(String traceId) {
        this.traceId = traceId;
    }

    public int getCount() {
        return count;
    }

    public void setCount(int count) {
        this.count = count;
    }
}


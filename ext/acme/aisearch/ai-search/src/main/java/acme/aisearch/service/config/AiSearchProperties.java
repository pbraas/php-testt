package acme.aisearch.service.config;

public class AiSearchProperties {

    private String clientId = "phpbb-prod";
    private String sharedSecret = "change-me";
    private boolean requireHmac = true;
    private long acceptedTimestampSkewSeconds = 300;
    private int defaultTopK = 10;

    public String getClientId() {
        return clientId;
    }

    public void setClientId(String clientId) {
        this.clientId = clientId;
    }

    public String getSharedSecret() {
        return sharedSecret;
    }

    public void setSharedSecret(String sharedSecret) {
        this.sharedSecret = sharedSecret;
    }

    public boolean isRequireHmac() {
        return requireHmac;
    }

    public void setRequireHmac(boolean requireHmac) {
        this.requireHmac = requireHmac;
    }

    public long getAcceptedTimestampSkewSeconds() {
        return acceptedTimestampSkewSeconds;
    }

    public void setAcceptedTimestampSkewSeconds(long acceptedTimestampSkewSeconds) {
        this.acceptedTimestampSkewSeconds = acceptedTimestampSkewSeconds;
    }

    public int getDefaultTopK() {
        return defaultTopK;
    }

    public void setDefaultTopK(int defaultTopK) {
        this.defaultTopK = defaultTopK;
    }

    public static AiSearchProperties fromEnvironment()
    {
        AiSearchProperties props = new AiSearchProperties();

        props.setClientId(readString("APP_CLIENT_ID", "acme.aisearch.client-id", props.getClientId()));
        props.setSharedSecret(readString("APP_SHARED_SECRET", "acme.aisearch.shared-secret", props.getSharedSecret()));
        props.setRequireHmac(readBoolean("APP_REQUIRE_HMAC", "acme.aisearch.require-hmac", props.isRequireHmac()));
        props.setAcceptedTimestampSkewSeconds(readLong("APP_ACCEPTED_TIMESTAMP_SKEW_SECONDS", "acme.aisearch.accepted-timestamp-skew-seconds", props.getAcceptedTimestampSkewSeconds()));
        props.setDefaultTopK(readInt("APP_DEFAULT_TOP_K", "acme.aisearch.default-top-k", props.getDefaultTopK()));

        return props;
    }

    private static String readString(String envName, String propName, String fallback)
    {
        String envValue = System.getenv(envName);
        if (envValue != null && !envValue.isBlank())
        {
            return envValue;
        }

        String propertyValue = System.getProperty(propName);
        if (propertyValue != null && !propertyValue.isBlank())
        {
            return propertyValue;
        }

        return fallback;
    }

    private static boolean readBoolean(String envName, String propName, boolean fallback)
    {
        String value = readString(envName, propName, null);
        if (value == null)
        {
            return fallback;
        }
        return "1".equals(value) || Boolean.parseBoolean(value);
    }

    private static long readLong(String envName, String propName, long fallback)
    {
        String value = readString(envName, propName, null);
        if (value == null)
        {
            return fallback;
        }
        try
        {
            return Long.parseLong(value);
        }
        catch (NumberFormatException ignored)
        {
            return fallback;
        }
    }

    private static int readInt(String envName, String propName, int fallback)
    {
        String value = readString(envName, propName, null);
        if (value == null)
        {
            return fallback;
        }
        try
        {
            return Integer.parseInt(value);
        }
        catch (NumberFormatException ignored)
        {
            return fallback;
        }
    }
}

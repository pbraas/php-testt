package acme.aisearch.service.security;

import acme.aisearch.service.config.AiSearchProperties;
import jakarta.annotation.Priority;
import jakarta.ws.rs.Priorities;
import jakarta.ws.rs.container.ContainerRequestContext;
import jakarta.ws.rs.container.ContainerRequestFilter;
import jakarta.ws.rs.ext.Provider;

import javax.crypto.Mac;
import javax.crypto.spec.SecretKeySpec;
import java.io.ByteArrayInputStream;
import java.io.IOException;
import java.nio.charset.StandardCharsets;
import java.security.MessageDigest;
import java.time.Instant;
import java.util.HexFormat;

@Provider
@Priority(Priorities.AUTHENTICATION)
public class HmacAuthFilter implements ContainerRequestFilter
{
    private static final AiSearchProperties PROPERTIES = AiSearchProperties.fromEnvironment();

    @Override
    public void filter(ContainerRequestContext requestContext) throws IOException
    {
        String path = "/" + requestContext.getUriInfo().getPath(false);
        String method = requestContext.getMethod();

        if (!path.startsWith("/v1/") || "GET".equalsIgnoreCase(method) || !PROPERTIES.isRequireHmac())
        {
            return;
        }

        String clientId = header(requestContext, "X-Client-Id");
        String timestamp = header(requestContext, "X-Timestamp");
        String nonce = header(requestContext, "X-Nonce");
        String bodySha256 = header(requestContext, "X-Body-Sha256");
        String signature = header(requestContext, "X-Signature");

        if (clientId == null || timestamp == null || nonce == null || bodySha256 == null || signature == null)
        {
            abort(requestContext, 401, "Missing HMAC authentication headers");
            return;
        }

        long ts;
        try
        {
            ts = Long.parseLong(timestamp);
        }
        catch (NumberFormatException ex)
        {
            abort(requestContext, 401, "Invalid timestamp");
            return;
        }

        long skew = Math.abs(Instant.now().getEpochSecond() - ts);
        if (skew > PROPERTIES.getAcceptedTimestampSkewSeconds())
        {
            abort(requestContext, 401, "Timestamp outside accepted skew");
            return;
        }

        if (!PROPERTIES.getClientId().equals(clientId))
        {
            abort(requestContext, 401, "Invalid client id");
            return;
        }

        byte[] body = requestContext.getEntityStream().readAllBytes();
        requestContext.setEntityStream(new ByteArrayInputStream(body));

        String computedBodySha = sha256Hex(body);
        if (!equalsConstantTime(bodySha256, computedBodySha))
        {
            abort(requestContext, 401, "Body SHA256 mismatch");
            return;
        }

        String canonical = String.join(
                "\n",
                method,
                path,
                timestamp,
                nonce,
                computedBodySha
        );
        String computedSignature = hmacHex(canonical, PROPERTIES.getSharedSecret());
        if (!equalsConstantTime(signature, computedSignature))
        {
            abort(requestContext, 401, "HMAC signature mismatch");
            return;
        }
    }

    private static String header(ContainerRequestContext requestContext, String name)
    {
        String value = requestContext.getHeaderString(name);
        return value == null || value.isBlank() ? null : value;
    }

    private static void abort(ContainerRequestContext requestContext, int statusCode, String message)
    {
        requestContext.abortWith(jakarta.ws.rs.core.Response.status(statusCode)
                .entity(message)
                .type("text/plain")
                .build());
    }

    private static boolean equalsConstantTime(String left, String right)
    {
        if (left == null || right == null)
        {
            return false;
        }
        return MessageDigest.isEqual(
                left.getBytes(StandardCharsets.UTF_8),
                right.getBytes(StandardCharsets.UTF_8)
        );
    }

    private static String sha256Hex(byte[] data)
    {
        try
        {
            MessageDigest digest = MessageDigest.getInstance("SHA-256");
            return HexFormat.of().formatHex(digest.digest(data));
        }
        catch (Exception ex)
        {
            throw new IllegalStateException("SHA-256 not available", ex);
        }
    }

    private static String hmacHex(String value, String secret)
    {
        try
        {
            Mac mac = Mac.getInstance("HmacSHA256");
            mac.init(new SecretKeySpec(secret.getBytes(StandardCharsets.UTF_8), "HmacSHA256"));
            return HexFormat.of().formatHex(mac.doFinal(value.getBytes(StandardCharsets.UTF_8)));
        }
        catch (Exception ex)
        {
            throw new IllegalStateException("HmacSHA256 not available", ex);
        }
    }
}

package acme.aisearch.service.controller;

import acme.aisearch.service.config.AiSearchProperties;
import acme.aisearch.service.core.IndexStoreService;
import acme.aisearch.service.model.AckResponse;
import acme.aisearch.service.model.IndexDeleteRequest;
import acme.aisearch.service.model.IndexUpsertRequest;
import acme.aisearch.service.model.SearchRequest;
import acme.aisearch.service.model.SearchResponse;
import acme.aisearch.service.model.TraceOnlyRequest;
import jakarta.ws.rs.Consumes;
import jakarta.ws.rs.GET;
import jakarta.ws.rs.POST;
import jakarta.ws.rs.Path;
import jakarta.ws.rs.Produces;
import jakarta.ws.rs.core.MediaType;
import jakarta.ws.rs.core.Response;

import java.time.Instant;
import java.util.LinkedHashMap;
import java.util.Map;
import java.util.UUID;

@Path("/v1")
@Produces(MediaType.APPLICATION_JSON)
@Consumes(MediaType.APPLICATION_JSON)
public class AiSearchResource
{
    private static final IndexStoreService INDEX_STORE = new IndexStoreService();
    private static final AiSearchProperties PROPERTIES = AiSearchProperties.fromEnvironment();

    @GET
    @Path("/health")
    public Response health()
    {
        Map<String, Object> response = new LinkedHashMap<>();
        response.put("status", "ok");
        response.put("version", "1.0.0");
        response.put("timestamp", Instant.now().toString());
        response.put("hmacRequired", PROPERTIES.isRequireHmac());
        return Response.ok(response).build();
    }

    @POST
    @Path("/search")
    public Response search(SearchRequest request)
    {
        String traceId = nonBlank(request == null ? null : request.getTraceId());
        int topK = request != null && request.getTopK() != null && request.getTopK() > 0
                ? request.getTopK()
                : PROPERTIES.getDefaultTopK();

        SearchResponse response = new SearchResponse(traceId, INDEX_STORE.search(request, topK));
        return Response.ok(response).build();
    }

    @POST
    @Path("/index/upsert")
    public Response upsert(IndexUpsertRequest request)
    {
        int count = INDEX_STORE.upsert(request == null ? null : request.getDocuments());
        AckResponse response = new AckResponse(true, nonBlank(request == null ? null : request.getTraceId()), count);
        return Response.ok(response).build();
    }

    @POST
    @Path("/index/delete")
    public Response delete(IndexDeleteRequest request)
    {
        int count = INDEX_STORE.deleteByDocumentIds(request == null ? null : request.getIds());
        AckResponse response = new AckResponse(true, nonBlank(request == null ? null : request.getTraceId()), count);
        return Response.ok(response).build();
    }

    @POST
    @Path("/index/purge")
    public Response purge(TraceOnlyRequest request)
    {
        int count = INDEX_STORE.purgeAll();
        AckResponse response = new AckResponse(true, nonBlank(request == null ? null : request.getTraceId()), count);
        return Response.ok(response).build();
    }

    private static String nonBlank(String value)
    {
        return value == null || value.isBlank() ? UUID.randomUUID().toString() : value;
    }
}


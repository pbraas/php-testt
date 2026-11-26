package acme.aisearch.service;

import acme.aisearch.service.controller.AiSearchResource;
import acme.aisearch.service.security.HmacAuthFilter;
import jakarta.ws.rs.ApplicationPath;
import jakarta.ws.rs.core.Application;

import java.util.HashSet;
import java.util.Set;

@ApplicationPath("/")
public class AiSearchJaxRsApplication extends Application
{
    @Override
    public Set<Class<?>> getClasses()
    {
        Set<Class<?>> classes = new HashSet<>();
        classes.add(AiSearchResource.class);
        classes.add(HmacAuthFilter.class);
        return classes;
    }
}

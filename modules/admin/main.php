<?php

import("@core/helpers/route");
import("@admin/_controller");


/**
 * Admin panel routes
 */
groupRoute("/admin", function() {
    /**
     * Dashboard requests
     */    
    addRoute("GET", "/dashboard", "__admin__dashboard_index", name:"dashboard");

    /**
     * Articles requests
     */    
    addRoute("GET", "/articles", "__admin__articles_index", name:"dashboard-articles");
    addRoute("GET", "/articles/create", "__admin__articles_create", name:"dashboard-articles-create");

    /**
     * Comments requests
     */    
    addRoute("GET", "/comments", "__admin__comments_index", name:"dashboard-comments");

    /**
     * Users requests
     */    
    addRoute("GET", "/users", "__admin__users_index", name:"dashboard-users");
    addRoute("GET", "/users/create", "__admin__users_create", name:"dashboard-users-create");
    
    /**
     * Settings requests
     */
    addRoute("GET", "/settings", "__admin__settings_index", name:"dashboard-settings");
    addRoute("POST", "/settings", "__admin__settings_store");
});
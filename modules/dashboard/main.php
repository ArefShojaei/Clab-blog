<?php

import("@core/helpers/route");
import("@modules/dashboard/_controller");


/**
 * Auth routes
 */
groupRoute("/admin", function() {
    addRoute("GET", "/dashboard", "__admin__dashboard_index", name:"dashboard");
    addRoute("GET", "/articles", "__admin__articles_index", name:"dashboard-articles");
    addRoute("GET", "/articles/create", "__admin__articles_create", name:"dashboard-articles-create");
    addRoute("GET", "/comments", "__admin__comments_index", name:"dashboard-comments");
    addRoute("GET", "/users", "__admin__users_index", name:"dashboard-users");
    addRoute("GET", "/settings", "__admin__settings_index", name:"dashboard-settings");
});
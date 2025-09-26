<?php

import("@core/helpers/route");
import("@modules/auth/_controller");


/**
 * Auth routes
 */
groupRoute("/auth", function() {
    addRoute("GET", "/login", "__auth__login_index");
    addRoute("POST", "/login", "__auth__login_store");
    addRoute("GET", "/register", "__auth__register_index");
    addRoute("POST", "/register", "__auth__register_store");
});
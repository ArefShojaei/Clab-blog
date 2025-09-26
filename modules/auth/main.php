<?php

import("@core/helpers/route");
import("@modules/auth/_controller");


/**
 * Auth routes
 */
groupRoute("/auth", function() {
    addRoute("GET", "/login", "__auth__login_index", name:"auth.login");
    addRoute("POST", "/login", "__auth__login_store");
    addRoute("GET", "/register", "__auth__register_index", name:"auth.register");
    addRoute("POST", "/register", "__auth__register_store");
});
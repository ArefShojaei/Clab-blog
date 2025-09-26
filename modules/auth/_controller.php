<?php

import("@core/helpers/view");


function __auth__login_index(): string {
    return view("dashboard.login");
}

function __auth__login_store(): string {
    return view("dashboard.login");
}

function __auth__register_index(): string {
    return view("dashboard.register");
}

function __auth__register_store(): string {
    return view("dashboard.register");
}
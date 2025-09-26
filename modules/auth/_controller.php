<?php

import("@core/helpers/view");


function __auth__login_index(): string {
    return view("auth.login");
}

function __auth__login_store(): string {
    return view("auth.login");
}

function __auth__register_index(): string {
    return view("auth.register");
}

function __auth__register_store(): string {
    return view("auth.register");
}
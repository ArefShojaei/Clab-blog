<?php

import("@core/helpers/view");


function __admin__dashboard_index(): string {
    return view("admin.dashboard");
}

function __admin__articles_index(): string {
    return view("admin.articles");
}

function __admin__articles_create(): string {
    return view("admin.add-article");
}

function __admin__comments_index(): string {
    return view("admin.comments");
}

function __admin__users_index(): string {
    return view("admin.users");
}

function __admin__users_create(): string {
    return view("admin.add-user");
}

function __admin__settings_index(): string {
    return view("admin.settings");
}
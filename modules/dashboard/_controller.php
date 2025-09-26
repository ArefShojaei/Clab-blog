<?php

import("@core/helpers/view");


function __admin__dashboard_index(): string {
    return view("dashboard.index");
}

function __admin__articles_index(): string {
    return view("dashboard.articles");
}

function __admin__articles_create(): string {
    return view("dashboard.add-article");
}

function __admin__comments_index(): string {
    return view("dashboard.comments");
}

function __admin__users_index(): string {
    return view("dashboard.users");
}

function __admin__users_create(): string {
    return view("dashboard.add-user");
}

function __admin__settings_index(): string {
    return view("dashboard.settings");
}
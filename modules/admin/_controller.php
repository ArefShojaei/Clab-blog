<?php

import("@core/helpers/view");
import("@core/hooks/useQuery");
import("@core/hooks/useRedirect");
import("@core/hooks/usePOST");


/**
 * Dashboard requests
 */
function __admin__dashboard_index(): string {
    return view("admin.dashboard");
}

function __admin__articles_index(): string {
    return view("admin.articles");
}


/**
 * Articles requests
 */
function __admin__articles_create(): string {
    return view("admin.add-article");
}


/**
 * Comments requests
 */
function __admin__comments_index(): string {
    return view("admin.comments");
}


/**
 * Users requests
 */
function __admin__users_index(): string {
    return view("admin.users");
}

function __admin__users_create(): string {
    return view("admin.add-user");
}


/**
 * Settings requests
 */
function __admin__settings_index(): string {
    $options = useQuery("SELECT * FROM `site_options`");

    return view("admin.settings", $options);
}

function __admin__settings_store(): void {
    $title = usePOST("title");
    $description = usePOST("description");
    $articlesCountInPerPage = usePOST("articles_count_in_per_page");
    $isUserCanLoggedIn = usePOST("is_user_can_loggedIn") && 1;
    $isUserPutComment = usePOST("is_user_put_comment") && 1;

    useQuery(
        "INSERT INTO `site_options` (title, description, articles_count_in_per_page, is_user_can_loggedIn, is_user_put_comment) VALUES ('?', '?', '?', '?', '?')",
        [$title, $description, $articlesCountInPerPage, $isUserCanLoggedIn, $isUserPutComment]
    );

    useRedirect(toRoute(route("dashboard-settings")));
}
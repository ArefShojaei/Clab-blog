<?php

import("@core/modules/migration/createMigration");
import("@core/helpers/migration");


createMigration("site_options", [
    "up" => function($table) {
        column_id($table, "id");
        column_string($table, "title");
        column_string($table, "description");
        column_integer($table, "articles_count_in_per_page");
        column_integer($table, "is_user_can_loggedIn", length:1);
        column_integer($table, "is_user_put_comment", length:1);
    },
    "down" => function($table) {
        table_dropIfExists($table);
    }
]);
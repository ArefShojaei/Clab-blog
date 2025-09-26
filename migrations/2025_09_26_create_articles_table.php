<?php

import("@core/modules/migration/createMigration");
import("@core/helpers/migration");


createMigration("articles", [
    "up" => function($table) {
        column_id($table, "id");
        column_text($table, "content");
        column_integer($table, "views");
        column_timestamp($table, "created_at");
        column_timestamp($table, "updated_at");
    },
    "down" => function($table) {
        table_dropIfExists($table);
    }
]);
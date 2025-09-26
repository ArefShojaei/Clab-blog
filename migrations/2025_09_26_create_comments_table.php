<?php

import("@core/modules/migration/createMigration");
import("@core/helpers/migration");


createMigration("comments", [
    "up" => function($table) {
        column_id($table, "id");
        column_string($table, "content");
        column_integer($table, "is_published", length:1);
        column_timestamp($table, "created_at");
        column_timestamp($table, "updated_at");
    },
    "down" => function($table) {
        table_dropIfExists($table);
    }
]);
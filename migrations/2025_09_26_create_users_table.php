<?php

import("@core/modules/migration/createMigration");
import("@core/helpers/migration");


createMigration("users", [
    "up" => function($table) {
        column_id($table, "id");
        column_integer($table, "role", length:1);
        column_string($table, "username");
        column_string($table, "email");
        column_timestamp($table, "created_at");
        column_timestamp($table, "updated_at");
        
        column_unique($table, "email");
    },
    "down" => function($table) {
        table_dropIfExists($table);
    }
]);
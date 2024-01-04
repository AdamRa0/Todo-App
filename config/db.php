<?php
    define("DB_HOST", "mysql-db");
    define("DB_USER", "admin");
    define("DB_PASSWORD", "secret");
    define("DB_NAME", "notes_db");

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);

    $conn->select_db(DB_NAME);

    if ($conn->connect_error) {
        die ("Connection failed: ".$conn -> connect_error);
    }
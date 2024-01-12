<?php
    define("DB_HOST", $_ENV["MYSQL_DATABASE_SERVICE"]);
    define("DB_USER", $_ENV["MYSQL_USER"]);
    define("DB_PASSWORD", $_ENV["MYSQL_PASSWORD"]);
    define("DB_NAME", $_ENV["MYSQL_DATABASE"]);

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);

    $conn->select_db(DB_NAME);

    if ($conn->connect_error) {
        die ("Connection failed: ".$conn -> connect_error);
    }
<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "adam");
    define("DB_PASSWORD", "Secret");
    define("DB_NAME", "Notes_DB");

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    if ($conn->connect_error) {
        die ("Connection failed: ".$conn -> connect_error);
    }
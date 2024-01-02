<?php

include "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $note = htmlspecialchars($_POST["new_note"]);

    if (empty($note)) {
        exit();
        header("Location: ../index.php");
    }

    $query = "INSERT INTO notes (Content) VALUES ('$note')";

    $conn->query($query);

    header("Location: ../index.php");
}
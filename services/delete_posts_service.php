<?php
include "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "DELETE FROM notes WHERE Completed=1";

    $conn->query($query);

    header("Location: ../index.php");
}
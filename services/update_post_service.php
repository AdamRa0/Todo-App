<?php

include "../config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = array_keys($_POST)[0];

    $query = "UPDATE notes SET Completed = NOT Completed WHERE ID=$post_id";

    $conn->query($query);

    header("Location: ../index.php");
}
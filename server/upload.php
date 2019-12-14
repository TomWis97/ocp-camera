<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_REQUEST['token'] === $_ENV['AUTH_TOKEN']) {
            move_uploaded_file($_FILES["image"]["tmp_name"], __DIR__ . "/image.jpg");
            echo("Ok!");
        }
        else {
            exit("Not correctly authenticated.");
        }
    }
    else {
        exit("This page should be requested with a POST");
    }
?>

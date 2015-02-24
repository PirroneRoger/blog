<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    //Here is the stuff that checks if youre logged in before you can create a post.
    if(!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }
    //this sanitizes the post
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //this query checks the connection
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post' ");
    
    if($query) {
        header("Location: " . $path . "index.php");
    }
    //if it is false it echos and error but if its true it echos the above.
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
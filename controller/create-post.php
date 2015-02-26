<!--Here begins the code for create-post.-->
<?php
    //it requires config and login verify to make sure you are logged in to post a post.
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    //Here is the stuff that checks if youre logged in before you can create a post.
    if(!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }
    //this sanitizes the title
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    //this next like filters the post. You don't want some bad words in there.
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    //this query checks the connection. It's brilliant how it works. Consult Google for further information.
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post' ");
    //heres an if statement saying the header is index.php which is just some links i think.
    if($query) {
        header("Location: " . $path . "index.php");
    }
    //if it is false it echos and error but if its true it echos the above.
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
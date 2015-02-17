<li role="presentation"><a role="menuitem" tabindex="-1" href="../index.php">Home</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="../login.php">Login</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="../register.php">Register</a></li>

<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }

    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post' ");
    
    if($query) {
        echo "<p>Successfully Inserted Post: $title</p>";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
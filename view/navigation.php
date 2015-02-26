<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
        //here its authenticating the user is logged in.
        if(!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }
?>
<nav>
        <!--this is code for the post.php and logout useer.-->
        <li><a href="<?php echo $path . "post.php"?>">Post</a></li>
        <li><a href="<?php echo $path . "/../controller/logout-user.php"?>">Logout</a></li>
        
</nav>
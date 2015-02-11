<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }
?>
<nav>
        <li><a href="<?php echo $path . "post.php"?>">Post</a></li>
</nav>
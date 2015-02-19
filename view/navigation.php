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
        <li><a href="<?php echo $path . "/../controller/logout-user.php"?>">Logout</a></li>
        
</nav>
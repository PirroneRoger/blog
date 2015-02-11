<li role="presentation"><a role="menuitem" tabindex="-1" href="index.php">Home</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="login.php">Login</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="register.php">Register</a></li>

<?php
    require_once(__DIR__ . "/controller/login-verify.php");
    require_once(__DIR__ . "/view/header.php");
    if(authenticateUser()) {
    require_once(__DIR__ . "/view/navigation.php");
    }
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/view/footer.php");
    require_once(__DIR__ . "/controller/read-posts.php");
?>

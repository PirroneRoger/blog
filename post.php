<!--nav bar code-->
<li role="presentation"><a role="menuitem" tabindex="-1" href="index.php">Home</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="login.php">Login</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="register.php">Register</a></li>

<?php
    //calls upon files that will fill the post.php page.
    require_once(__DIR__ . "/view/header.php");
    require_once(__DIR__ . "/view/form.php");
    require_once(__DIR__ . "/view/footer.php");
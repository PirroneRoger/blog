<!--nav bar code-->
<ul id="animateList">
<li role="presentation"><a role="menuitem" tabindex="-1" href="index.php">Home</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="login.php">Login</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="register.php">Register</a></li>
</ul>

<?php
    //calls upon the code that will fill up the page of login.php
    require_once(__DIR__ . "/view/header.php");
    require_once(__DIR__ . "/view/login-form.php");
    require_once(__DIR__ . "/view/footer.php");
    
<!--This code is for the nav bar-->
<li role="presentation"><a role="menuitem" tabindex="-1" href="index.php">Home</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="login.php">Login</a></li>
<li role="presentation"><a role="menuitem" tabindex="-1" href="register.php">Register</a></li>

<?php
    //its calling upon the register form and header and footer to create a complete page.
    require_once(__DIR__ . "/view/header.php");
    require_once(__DIR__ . "/view/register-form.php");
    require_once(__DIR__ . "/view/footer.php");
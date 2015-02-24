


<?php
    //this is requiring all the various files to create the index page.
    //the index isn't created by just html so it uses different files.
    require_once(__DIR__ . "/view/header.php");
    require_once(__DIR__ . "/controller/login-verify.php");   
    if(authenticateUser()) {
    require_once(__DIR__ . "/view/loggedInNav.php");    
    }else{
    require_once(__DIR__ . "/view/loggedOutNav.php"); 
    }
    require_once(__DIR__ . "/controller/create-db.php");
    require_once(__DIR__ . "/controller/read-posts.php");
    require_once(__DIR__ . "/view/footer.php");
?>

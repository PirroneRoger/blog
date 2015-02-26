<!--Here's the code for the create-user which is for creating a user -->
<?php
    //here the code is calling upon config.php and login-verify.
    require_once(__DIR__ . "/../model/config.php");
    //it's checking to see if you're logged in.
    require_once(__DIR__ . "/../controller/login-verify.php");
    //here it's filtering the input with email username and password because cussing is bad.
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    //heres some salt code and some dollar signs. It does stuff. Consult Google for further information.
    $salt = "$5$" . "round=5000$" . uniqid(mt_rand(), true) . "$";
    //this encrypts the password.
    $hashedPassword = crypt($password, $salt);
    //this code checks the email etc. and the amazing salt. Consult Google for further information.
    $query = $_SESSION["connection"]->query("INSERT INTO users SET " 
            . "email = '$email',"
            . "username = '$username',"
            . "password = '$hashedPassword',"
            . "salt = '$salt'");
    //here is the code when it creates the username and if its unsuccessful it sends out an error.
    if($query) {
        echo "Successfully created user: $username";
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
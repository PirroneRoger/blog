<li role="presentation"><a role="menuitem" tabindex="-1" href="../index.php">Home</a></li>
<!--The following code is for logging in the user.-->
<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    //this code is filtering the input through the username and password database.
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    //this code calls upon the query for salt from users to where username thing.
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE BINARY username = '$username'");
    echo $query->num_rows;
   //This here code sets the number of rows and fetches the array
    if($query->num_rows == 1) {
        echo 'num_rows1';
        $row = $query->fetch_array();
        //this here code checks if the login is successful and if it is it logs in.
        if($row["password"] === crypt($password, $row["salt"])) {
            $_SESSION["authenticated"] = true;
            echo "<p>Login Successful!</p>";
        }
        //if its wrong it echos the following stuff
        else {
            echo "<p>Invalid username and password</p>";
        }
    }
    //if its wrong it also echos this stuff and its twice because this blog is awesome.
    else {
        echo "<p>Invalid username and password</p>";
    }
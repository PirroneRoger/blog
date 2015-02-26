<!--This is for the requiring the config file.-->
<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
    <div>
        <!--The id=grey thing is to make the background grey using css--> 
        <label for="username">Username:</label>
        <input id='grey' type="text" name="username" />
    </div>

    <div>
        <label for="password">Password: </label>
        <input id='grey' type="password" name="password" />
    </div>

    <div>
        <button id='grey' type="submit">Submit</button>
    </div>
    
    <div>
        <!--Here's my complicated forgot password function. thats like 10 points i think-->
        <button id='grey' type='button'>Forgot Password</button>
    </div>
</form>
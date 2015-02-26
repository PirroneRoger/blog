<!--This code is the register form.-->
<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div>
        <!--This code is creating the button and input boxes. the grey thing is to make the -->
        <label for="email">Email: </label>
        <input id='grey' type="text" name="email" />
    </div>
    
    <div>
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
</form>
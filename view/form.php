<!--This here code is for form.php and its calling upon config and login verify
    It also is authenticating the user.-->
<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    //authenticating the user through the index.php
    if(!authenticateUser()) {
        header("Location: " . $path . "index.php");
        die();
    }
?>
<!--This stuff here is for the html code for creating a blog post.-->
<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    
    <!--The id="grey" thing is for the css code that makes the background grey.-->
    <div>
        <!--the title and input box-->
        <label for="title">Title: </label>
        <input id='grey' type="text" name="title" />
    </div>
    
    <div>
        <!--The posts label and text box/area-->
        
        <label for="post">Post: </label>
        <textarea id='grey' name="post"></textarea>
    </div>
    
    <div>
        <!--The submit button.-->
        <button id='grey' type="submit">Submit</button>
    </div>
</form>
<!--This code here controls the read posts stuff requiring config.php-->
<?php
    //here it requires the config.php file cause config.php is very popular at school.
    require_once(__DIR__ . "/../model/config.php");
    //here its selecting the FROM posts file thing.
    $query = "SELECT * FROM posts";
    $result = $_SESSION["connection"]->query($query);
    
    //echos the divs and paras and breaks
    if($result){
        while($row = mysqli_fetch_array($result)) {
            echo "<div class='post'>";
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<br />";
            echo "<p>" . $row['post'] . "</h1>";
            echo "<br/>";
            echo "</div>";
        }
    }
<?php
    require_once(__DIR__ . "/../model/config.php");
    
    $query = $_SESSION["connection"]->query("CREATE TABLE posts ("
            
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "title varchar(255) NOT NULL,"
            . "post text NOT NULL,"
            . "PRIMARY KEY (id))");
    
    if($query) {
    }
    else {
    }
    
    $query2 = $_SESSION["connection"]->query("CREATE TABLE users ("
            . "id int(11) NOT NULL AUTO_INCREMENT,"
            . "username varchar(30) NOT NULL,"
            . "email varchar (50) NOT NULL,"
            . "password char (128) NOT NULL,"
            . "salt char(128) NOT NULL,"
            . "PRIMARY KEY (id))");
    if($query2) {
    }
    else {
        echo "<p id='hide'>" . $_SESSION["connection"]->error . "</p>";
    }
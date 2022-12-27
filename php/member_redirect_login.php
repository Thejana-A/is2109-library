<?php
    session_start();
    if(($_SESSION["userID"] == "")||($_SESSION["userID"] == 1)){
        header("location:http://localhost/is2109-library/login.php");
        die();
    }
?>
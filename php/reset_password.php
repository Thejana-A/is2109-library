<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "is2109_library";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE user SET password = '".$_POST['password']."' WHERE userID = '".$_POST['userID']."';";

    if ($conn->query($sql) === TRUE) {
        echo "<div style='background-color:#a8a8ec;border-radius:3px;padding:5px;'>";
        echo "<center>password was updated successfully</center>";
        echo "</div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); 
?>
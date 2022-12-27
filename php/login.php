<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "is2109_library";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM user WHERE email = '".$_GET["email"]."';";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row["password"] == $_GET["password"]){
            session_start();
            $_SESSION["email"] = $row["email"]; 
            $_SESSION["userID"] = $row["userID"]; 
            $_SESSION["username"] = $row["first_name"]." ".$row["last_name"]; 
            if($row["userID"] == 1){
                header("location: http://localhost/is2109-library/admin_home.php");
            }else{
                header("location: http://localhost/is2109-library/member_home.php");
            }
        }else{
            echo "<div style='background-color:#a8a8ec;border-radius:3px;padding:5px;'>";
            echo "<center>Sorry! Credentials are invalid</center>";
            echo "</div>";
        }
        
    } else {
        echo "0 results";
    }

    $conn->close(); 
?>

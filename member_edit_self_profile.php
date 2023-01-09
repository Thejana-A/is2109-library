<!DOCTYPE html>
<?php require_once 'php/member_redirect_login.php' ?>
<html>
<head>
    <title>Admin edit self profile</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "is2109_library";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn){
            die("Connection failed: ".mysqli_connect_error());
        }
        $userID = $_SESSION["userID"];
        $sql = "SELECT * FROM user WHERE userID = ".$userID;
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        } else {
            echo "0 results";
        }

        mysqli_close($conn);
    ?>
</head>
<body style="background-image: url('icon/member_home.jpg');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;">
    <div class="container">
        <div class="top">
            <img src="./icon/logo.jpg" style="float:left;width:80px;">
            <img src="./icon/logo.jpg" style="float:right;width:80px;">
            <center><h1>Reading Club</h1></center>
        </div>
        <div class="mid">
            <a href="login.php">Logout</a>
            <a href="member_edit_self_profile.php"><?php echo $_SESSION["username"]; ?></a> 
        </div>
        <div class="nav">
            <div class="nav-btn">
                <center>
                    <a href="member_books.php">Books</a>
                    <a href="member_borrowings.php">Borrowings</a>
                </center>
            </div>
        </div><br><br>
        <center>
            <div class="form-box">
                <form method="post" action="php/update_user.php" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td><center><h3>Edit profile</h3></center></td>
                        </tr>
                        <tr>
                            <td>User ID</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="userID" value="<?php echo $row["userID"]; ?>" readonly /></td>
                            <input type="text" hidden="true" name="active_status" value="<?php echo $row["active_status"]; ?>" readonly />
                        </tr>
                        <tr>
                            <td>First name</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="first_name" value="<?php echo $row["first_name"]; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Last name</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="last_name" value="<?php echo $row["last_name"]; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="email" value="<?php echo $row["email"]; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Date of birth</td>
                        </tr>
                        <tr>
                            <td><input type="date" name="DOB" style="width:200px;" value="<?php echo $row["DOB"]; ?>" /></td>
                        </tr>
                        <tr>
                            <td>City</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="city" value="<?php echo $row["city"]; ?>" /></td>
                        </tr>
                        <tr>
                            <td>Contact number</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="contact_no" value="<?php echo $row["contact_no"]; ?>" /></td>
                        </tr>
                        <tr>
                            <td><center><input type="submit" value="Save" id="submit-button" /></center></td>
                        </tr>
                    </table>
                </form>
            </div>
        </center>

        <center>
            <div class="form-box">
                <form method="post" action="php/reset_password.php">
                    <table>
                        <tr>
                            <td><center><h3>Reset password</h3></center></td>
                        </tr>
                        <tr>
                            <td>User ID</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="userID" value="<?php echo $row["userID"]; ?>" readonly /></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                        </tr>
                        <tr>
                            <td><input type="password" name="password" /></td>
                        </tr>
                        <tr>
                            <td><center><input type="submit" value="Save" id="submit-button" /></center></td>
                        </tr>
                    </table>
                </form>
            </div>
    </center>

    </div>
</body>
</html>

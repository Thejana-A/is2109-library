<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <center>
        <div class="login-box">
            <form method="post" action="php/signup.php" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><center><h3>Registration form</h3></center></td>
                    </tr>
                    <tr>
                        <td>First name</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="first_name" /></td>
                    </tr>
                    <tr>
                        <td>Last name</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="last_name" /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email" /></td>
                    </tr>
                    <tr>
                        <td>Date of birth</td>
                    </tr>
                    <tr>
                        <td><input type="date" name="DOB" /></td>
                    </tr>
                    <tr>
                        <td>City</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="city" /></td>
                    </tr>
                    <tr>
                        <td>Contact number</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="contact_no" /></td>
                    </tr>
                    <tr>
                        <td>Library membership card</td>
                    </tr>
                    <tr>
                        <td><input type="file" name="membershipID" /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" /></td>
                    </tr>

                    <tr>
                        <td><center><input type="submit" value="Sign up" id="submit-button" /></center></td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
</html>
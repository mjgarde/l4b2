<?php

require 'db.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM admin 
            WHERE username='$username' 
            AND pass='$pass'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        echo "Login Successful!";
    } else {
        echo "Invalid Username or Password!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<div class="form">
    <form method="POST">

        <h2>Login</h2>

        <label>Username</label><br>
        <input type="text" name="username"><br><br>

        <label>Password</label><br>
        <input type="password" name="pass"><br><br>

        <input type="submit" name="login" value="Login">

    </form>
</div>

</body>
</html>

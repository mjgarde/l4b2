<?php

$include = "db.php";

$if(isset[$_POST('login')]){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM admin WHERE username='$username' AND pass= '$pass'";
}


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form {
            display: flex;
            border: 1px solid black;
            width: 200px;
            padding: 20px
            /* justify-content: space-between; */
            
        }
        
    </style>
</head>

<body>
    <div class="form" method="post">
        <form action="">
            <h2>Login</h2>
            <label for="" name="username">username</label>
            <input type="text">
            <label for="" name="pass">password</label>
            <input type="text">
            <br> <hr>
            <input type="submit" value="Login" style="width: 180px;" name="login">
        </form>
    </div>
</body>
</html>
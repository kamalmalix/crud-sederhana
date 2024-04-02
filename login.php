<?php
require "config.php";
session_start();

if (isset($_SESSION['username'])) {
    header('location: index.php');
}

if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pwd = $_POST['pass'];

    $query = mysqli_query($database, "SELECT * FROM user_tb WHERE email = '$uname'");
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);

        if (password_verify($pwd, $data['pass'])) {

            $_SESSION['username'] = $data['username'];
            header('location: index.php');
        }
    } else {
        echo 'false';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <h3>Login</h3>
    <form action="" method="post">
        <div>
            <label for="">Username</label>
            <input type="email" name="uname">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="pass">
        </div>
        <div>
            <input type="submit" value="login" name="login">
        </div>
    </form>
</body>

</html>
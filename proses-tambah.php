<?php
require('config.php');

if (isset($_POST['save'])) {
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($database, "INSERT INTO user_tb VALUES(null,'$username', '$email', '$hash')");
    header("Location: index.php");
} else {
    echo 'data gagal ditambah';
}

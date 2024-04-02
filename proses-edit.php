<?php
require('config.php');

if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

    $query = mysqli_query($database, "UPDATE user_tb SET username = '$username', email = '$email', pass = '$pass' where id = '$id'");

    header("Location: index.php");
}

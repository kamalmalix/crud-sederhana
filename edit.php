<?php
require('config.php');

if (!isset($_GET['id'])) {
    header("Location: index.php");
}

$id = $_GET['id'];

$query = mysqli_query($database, "Select * from user_tb where id = $id");

$data = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die('data tidak ditemukan');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Form Edit User</h3>
    <form action="proses-edit.php" method="post">
        <div>
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
        </div>
        <div>
            <label for="">Username</label>
            <input type="text" name="uname" value="<?= $data['username']; ?>">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" id="" value="<?= $data['email']; ?>">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="pwd" id="" value="<?= $data['pass']; ?>">
        </div>
        <div>
            <input type="Submit" name="edit" value="Edit">
        </div>
    </form>

</body>

</html>
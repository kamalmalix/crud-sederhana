<?php
require('config.php');
session_start();

if (!isset($_SESSION['username'])) {
    header('location: login.php');
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
    <h3>Selamat datang <?= $_SESSION['username']; ?> !!!</h3>
    <div>
        Klik disini untuk <a href="logout.php">logout!!</a>
    </div>
    <h3>Data User</h3>
    <p><a href="tambah.php">Tambah user</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query = mysqli_query($database, "select * from user_tb");
        foreach ($query as $q) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $q['username']; ?></td>
                <td><?= $q['email']; ?></td>
                <td><?= $q['pass']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $q['id']; ?>">Edit</a> | <a href="hapus.php?id=<?= $q['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
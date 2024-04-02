<?php
require('config.php');

$id = $_GET['id'];

mysqli_query($database, "DELETE FROM user_tb WHERE id = $id");

header("Location: index.php");

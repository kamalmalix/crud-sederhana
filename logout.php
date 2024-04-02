<?php
session_start();

if (isset($_SESSION['username'])) {
    session_unset();
    session_destroy();
    echo 'Sampai Jumpa kembali. Klik ini untuk kembali <a href="login.php">Login !!!</a>';
}

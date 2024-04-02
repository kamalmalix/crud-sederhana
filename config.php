<?php

$database = mysqli_connect('localhost', 'root', '', 'crud-db');

if (!$database) {
    die(mysqli_connect_error());
}

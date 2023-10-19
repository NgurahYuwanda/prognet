<?php

$db = 'db_2205551007';
$server = 'prognet.localnet';
$username = '2205551007';
$password = '2205551007';

$conn = mysqli_connect($server, $username, $password, $db);
if (!$conn) {
    die('Koneksi gagal!' . mysqli_connect_error());
}

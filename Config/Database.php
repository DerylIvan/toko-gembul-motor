<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_penjualan";

$connection = new mysqli($host, $user, $pass, $db);
if (mysqli_connect_errno()) {
    trigger_error('Koneksi ke database gagal. Error => ' . mysqli_connect_error(), E_USER_ERROR);
}

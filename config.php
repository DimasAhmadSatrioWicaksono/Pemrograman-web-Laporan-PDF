<?php
// config.php
$host = 'localhost';
$user = 'root';      // ganti jika berbeda
$pass = '';          // ganti jika pakai password
$db   = 'tutorial';

$mysqli = new mysqli($host, $user, $pass, $db);

// cek koneksi
if ($mysqli->connect_errno) {
    die('Koneksi gagal: ' . $mysqli->connect_error);
}

// aktifkan mode exception untuk query-error
$mysqli->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
?>
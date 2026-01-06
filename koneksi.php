<?php
$conn = new mysqli("localhost", "rafi", "passwordku", "level1_db");

if ($conn->connect_error) {
    die("Koneksi database gagal");
}
?>

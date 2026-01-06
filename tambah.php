<?php
include 'koneksi.php';

$nama  = $_POST['nama'];
$email = $_POST['email'];

$query = "INSERT INTO siswa (nama, email) VALUES ('$nama', '$email')";
$result = $conn->query($query);

if ($result) {
    header("Location: index.php");
} else {
    echo "Gagal insert: " . $conn->error;
}
?>


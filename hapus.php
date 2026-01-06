<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM siswa WHERE id = $id";
    if ($conn->query($query)) {
        header("Location: index.php");
    } else {
        echo "Gagal menghapus data";
    }
} else {
    echo "ID tidak ditemukan";
}
?>

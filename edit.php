<?php
include 'koneksi.php';

$id = $_GET['id'];

if (isset($_POST['update'])) {
    $nama  = $_POST['nama'];
    $email = $_POST['email'];
    $conn->query("UPDATE siswa SET nama='$nama', email='$email' WHERE id=$id");
    header("Location: index.php");
}

$data = $conn->query("SELECT * FROM siswa WHERE id=$id")->fetch_assoc();
?>

<h2>Edit Data</h2>

<form method="post">
    Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>
    Email: <input type="email" name="email" value="<?= $data['email'] ?>" required><br>
    <button name="update">Update</button>
</form>

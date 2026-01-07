

<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUddddD Level 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }
        .container {
            width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        form input {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
        }
        button {
            padding: 8px 15px;
            background: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 5px;
        }
        button:hover {
            background: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th {
            background: #f2f2f2;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: #2196F3;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
<div class="container">
    <h2>CRUD LEVEL 2</h2>

    <form action="tambah.php" method="post">
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Tambah Data</button>
    </form>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        $data = $conn->query("SELECT * FROM siswa");
        while ($row = $data->fetch_assoc()) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>

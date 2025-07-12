<?php
$conn = new mysqli("localhost", "root", "", "db_toko");

$result = $conn->query("SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Data Produk</h1>
    <a href="tambah.php">Tambah Produk Baru</a><br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_produk'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id_produk'] ?>">Edit</a> | 
                <a href="hapus.php?id=<?= $row['id_produk'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

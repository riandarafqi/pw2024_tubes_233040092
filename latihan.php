<?php
require 'fuction.php';
$obat = query("SELECT * FROM obat")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <style>
        body {
            font-size: 20px;
            background-color: lightblue;
            font-family: arial;
            margin-left: 50px;
        }
        table {
            background-color: pink;
        }
    </style> -->
    <title>Apotik Rianda</title>
</head>
<body>
    <h1>Daftar Obat</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Detail Obat</th>
        </tr>
        <?php $i = "1"; ?>
        <?php foreach($obat as $obt) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td>
                <a href="">Ubah</a> | 
                <a href="hapus.php?id=<?= $obt["id"];?>" onclick="return confirm('yakin data dihapus?')">Hapus</a>
            </td>
            <td><?= $obt["nama"]; ?></td>
            <td>
                <a href="detail.php?id=<?= $obt["id"]; ?>">lihat detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="tambah.php">Tambah Data Obat</a>
</body>
</html>
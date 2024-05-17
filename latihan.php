<?php
require 'fuction.php';
$obat = query("SELECT * FROM obat")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotik Rianda</title>
</head>
<body>
    <h1>Daftar Obat</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no.</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php $i = "1"; ?>
        <?php foreach($obat as $obt) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $obt["nama"]; ?></td>
            <td>
                <a href="detail.php?id=<?= $obt["id"]; ?>">lihat detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
<?php
require 'fuction.php';

$no = $_GET['id'];

$obat = query("SELECT * FROM obat WHERE id = $no");
// var_dump($obat);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Obat</title>
</head>
<body>
    <h3>Detail Obat</h3>
        <?php foreach($obat as $obt) : ?>
        <ul>
            <li><img src="img/<?= $obt["gambar"]; ?>" height="50"></li>
            <li>Nama Obat :<?= $obt["nama"]; ?></li>
            <li>Harga :<?= $obt["harga"]; ?></li>
            <li>
                <a href="">ubah</a> | <a href="">hapus</a>
            </li>
            <li>
                <a href="latihan.php">Kembali ke daftar mahasiswa</a>
            </li>
        </ul>
        <?php endforeach; ?>
    </table>
</body>
</html>
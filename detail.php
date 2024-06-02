<?php
require 'functions.php';
if(!isset($_GET['id'])){
    header("Location: latihan.php");
    exit;
}
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
    <link rel="stylesheet" href="style.css">
    <style>
        a {
            text-decoration: none;
    }
    body {
        line-height:30px;
    }
    </style>
</head>
<body>
    <h3>Detail Obat</h3>
        <?php foreach($obat as $obt) : ?>
        <ul>
            <li><img src="img/<?= $obt["gambar"]; ?>" height="150"></li>
            <li>Nama Obat :<?= $obt["nama"]; ?></li>
            <li>Harga :<?= $obt["harga"]; ?></li>
            <li>Kode Barang :<?= $obt["kode_barang"]; ?></li>
            <li>
                <a href="latihan.php">Kembali ke daftar mahasiswa</a>
            </li>
        </ul>
        <?php endforeach; ?>
    </table>
</body>
</html>
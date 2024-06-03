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
    <link rel="stylesheet" href="css/detail.css">
</head>
<body>
    <h1>Detail Obat</h1>
    <form>
        <div class="detail-obat">
        <?php foreach($obat as $obt) : ?>
        <ul>
            <li><img src="img/<?= $obt["gambar"]; ?>" height="150"></li>
            <li>Nama Obat :<?= $obt["nama"]; ?></li>
            <li>Harga :<?= $obt["harga"]; ?></li>
            <li>Kode Barang :<?= $obt["kode_barang"]; ?></li>
        </ul>
        <?php endforeach; ?>
        </div>
        <button><a href="latihan.php">Kembali ke daftar mahasiswa</a></button>
    </form>
</body>
</html>
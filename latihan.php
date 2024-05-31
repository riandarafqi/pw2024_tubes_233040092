<?php
require 'functions.php';
$obat = query("SELECT * FROM obat ORDER BY id desc");
if (isset($_POST["cari"])){
    $obat = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apotik Rianda</title>
</head>
<body>
    <a href="tambah.php">Tambah Data Obat</a>
    <form action="" method="post">
        <input type="text" name="keyword" size="40"autofocus placeholder="masukan nama obat.." autocomplete="off" id="keyword"> 
        <button type="sumbit" name="cari" id="tombol-cari">Cari!</button>
    </form>
    
    <h1>Daftar Obat</h1>
    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0" >
        <tr>
            <th>no.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Detail Obat</th>
        </tr>

        <?php if(empty($obat)): ?>
        <tr>
            <td colspan="4"><p style="color:red; font-style:italic;">Data Obat Tidak Ditemukan!</p></td>
        </tr>
        <?php endif; ?>
        
        <?php $i = "1"; ?>
        <?php foreach($obat as $obt) : ?>
            <tr>
                <td><?= $i++ ?>.</td>
            <td>
                <a href="ubah.php?id=<?=$obt["id"];?>">Ubah</a> | 
                <a href="hapus.php?id=<?= $obt["id"];?>" onclick="return confirm('yakin data dihapus?')">Hapus</a>
            </td>
            <td><?= $obt["nama"]; ?></td>
            <td>
                <a href="detail.php?id=<?= $obt["id"]; ?>">lihat detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
    <script src="script.js"></script>
</body>
</html>
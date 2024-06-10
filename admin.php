<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
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
    <header>
        <div class="logo">
            <img src="logo.png">
        </div>
            <div class="buttons">
                <button><a href="logout.php">Logout</a></button>
                <button><a href="tambah.php">Tambah Data Obat</a></button>
            </div>
    </header>
    <div class="container">
    <h1>Daftar Obat</h1>
    <form action="" method="post">
    <div class="search-bar">
            <input type="text" name="keyword" size="40" placeholder="masukan nama obat.." autocomplete="off" id="keyword"> 
            <button type="submit" name="cari" id="tombol-cari"><img src="cari.png" alt=""></button>
        </div>
    </form>
    <div id="container">
    <table>
        <thead>
        <tr>
            <th>no.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Detail Obat</th>
        </tr>
        </thead>

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
    </div>
    <script src="script.js"></script>
</body>
</html>
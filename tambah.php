<?php
require 'functions.php';
// if(!isset($_GET['id'])){
//     header("Location: latihan.php");
//     exit;
// }
if( isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href= 'latihan.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('data berhasil ditambahkan!');
            document.location.href= 'latihan.php';
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Obat</title>
</head>
<link rel="stylesheet" href="css/tambah.css">
<body>
    <h1>Tambah Data Obat</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="gambar">Gambar :
                    <input type="file" name="gambar" id="gambar" class="gambar" onchange="previewImage()">
                </label>
                <img src="img/nophoto.jpg" width="120" style="display: block" class="img-preview">
            </li>
            <li>
                <label for="nama">Nama obat :</label>
                <input type="text" name="nama" id="nama" autocomplete="off">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" autocomplete="off">
            </li>
            <li>
                <label for="kode">Kode Barang :</label>
                <input type="text" name="kode" id="kode" autocomplete="off">
            </li>
            <li><button type="submit" name="submit">Save</button></li>
        </ul>
    </form>
    <script src="script.js"></script>
</body>
</html>
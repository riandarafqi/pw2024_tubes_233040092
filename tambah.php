<?php
require 'fuction.php';
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
<link rel="stylesheet" href="style.css">
<body>
    <h1>Tambah Data Obat</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <label for="nama">Nama obat :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <label for="kode">Kode Barang :</label>
                <input type="text" name="kode" id="kode">
            </li>
            <li><button type="submit" name="submit">Save</button></li>
        </ul>
    </form>
</body>
</html>
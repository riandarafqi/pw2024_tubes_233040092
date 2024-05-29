<?php
require 'functions.php';
$id = $_GET["id"];
$obt = query("SELECT * FROM obat WHERE id = $id")[0];
if( isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "
            <script>
            alert('data berhasil diubah!');
            document.location.href= 'latihan.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('data berhasil diubah!');
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
    <title>Ubah Data Obat</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <h1>Ubah Data Obat</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $obt["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $obt["gambar"]; ?>">
        <ul>
            <li>
                <label for="gambar">Gambar :</label>
                <img src="img/<?= $obt['gambar']; ?>" height="150" alt=""><br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <label for="nama">Nama obat :</label>
                <input type="text" name="nama" id="nama" value="<?= $obt["nama"]; ?>">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" value="<?= $obt["harga"]; ?>">
            </li>
            <li>
                <label for="kode">Kode Barang :</label>
                <input type="text" name="kode_barang" id="kode" value="<?= $obt["kode_barang"]; ?>">
            </li>
            <li><button type="submit" name="submit">Ubah</button></li>
        </ul>
    </form>
</body>
</html>
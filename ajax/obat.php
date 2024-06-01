<?php
require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM obat WHERE 
            gambar LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            kode_barang LIKE '%$keyword%'
            ";
$obat = query($query);
?>

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
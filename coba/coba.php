<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Obat</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png">
        </div>
        <div class="buttons">
            <button onclick="logout()">Logout</button>
            <button onclick="tambahDataObat()">Tambah Data Obat</button>
        </div>
    </header>
    <div class="container">
        <h1>Daftar Obat</h1>
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Cari...">
            <button onclick="searchTable()">
                <img src="search-icon.png" alt="Cari">
            </button>
        </div>
        <table id="dataTable">
            <thead>
                <tr>
                    <th>Nama Obat</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
    <tr>
        <td>Paracetamol</td>
        <td>Analgesik</td>
        <td>Rp10.000</td>
        <td>
            <button onclick="ubahDataObat()">Ubah</button>
            <button onclick="hapusDataObat()">Hapus</button>
        </td>
    </tr>
    <tr>
        <td>Aspirin</td>
        <td>Analgesik</td>
        <td>Rp12.000</td>
        <td>
            <button onclick="ubahDataObat()">Ubah</button>
            <button onclick="hapusDataObat()">Hapus</button>
        </td>
    </tr>
    <tr>
        <td>Amoxicillin</td>
        <td>Antibiotik</td>
        <td>Rp15.000</td>
        <td>
            <button onclick="ubahDataObat()">Ubah</button>
            <button onclick="hapusDataObat()">Hapus</button>
        </td>
    </tr>
    <tr>
        <td>Ciprofloxacin</td>
        <td>Antibiotik</td>
        <td>Rp20.000</td>
        <td>
            <button onclick="ubahDataObat()">Ubah</button>
            <button onclick="hapusDataObat()">Hapus</button>
        </td>
    </tr>
    <tr>
        <td>Ibuprofen</td>
        <td>Anti-inflamasi</td>
        <td>Rp18.000</td>
        <td>
            <button onclick="ubahDataObat()">Ubah</button>
            <button onclick="hapusDataObat()">Hapus</button>
        </td>
    </tr>
    <tr>
        <td>Metformin</td>
        <td>Antidiabetik</td>
        <td>Rp25.000</td>
        <td>
            <button onclick="ubahDataObat()">Ubah</button>
            <button onclick="hapusDataObat()">Hapus</button>
        </td>
    </tr>
    <tr>
        <td>Omeprazole</td>
        <td>Antasida</td>
        <td>Rp22.000</td>
        <td>
            <button onclick="ubahDataObat()">Ubah</button>
            <button onclick="hapusDataObat()">Hapus</button>
        </td>
    </tr>
    <tr>
        <td>Loratadine</td>
        <td>Antihistamin</td>
        <td>Rp17.000</td>
        <td>
            <button onclick="ubahDataObat()">Ubah</button>
            <button onclick="hapusDataObat()">Hapus</button>
        </td>
    </tr>
    <tr>
        <td>Simvastatin</td>
        <td>Hipolipidemik</td>
        <td>Rp30.000</td>
        <td>
            <button onclick="ubahDataObat()">Ubah</button>
            <button onclick="hapusDataObat()">Hapus</button>
        </td>
    </tr>
    <tr>
        <td>Amlodipine</td>
        <td>Antihipertensi</td>
        <td>Rp28.000</td>
        <td>
            <button onclick="ubahDataObat()">Ubah</button>
            <button onclick="hapusDataObat()">Hapus</button>
        </td>
    </tr>
</tbody>

        </table>
    </div>
    <script src="script.js"></script>
</body>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040092");

function query($query){
    // $conn = koneksi();
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data){
    global $conn;
    $gambar = upload();
    if (!$gambar){
        return false;
    }
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $kode = htmlspecialchars($data["kode"]);
    
    $query = "INSERT INTO obat VALUES (null,'$gambar','$nama','$harga', '$kode')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if($error === 4){
        echo "<script>
            alert('pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }
    
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile );
    $ekstensiGambar = strtolower (end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('yang anda upload bukan gambar!');
        </script>";
        return false;
    }
    
    if($ukuranFile > 1000000) {
        echo "<script>
        alert('gambar terlalu besar!');
        </script>";
        return false;
    }
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM obat WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $kode = htmlspecialchars($data["kode_barang"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    
    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE obat SET 
        gambar = '$gambar',
        nama = '$nama',
        harga = '$harga',
        kode_barang = '$kode' 
        WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
    // $gambar = htmlspecialchars($data["gambar"]);

function cari($keyword){
    $query = "SELECT * FROM obat WHERE 
                gambar LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                kode_barang LIKE '%$keyword%'
                ";
    return query($query);
}
?>
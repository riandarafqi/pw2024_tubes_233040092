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
    $gambar = htmlspecialchars($data["gambar"]);
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $kode = htmlspecialchars($data["kode"]);

    $query = "INSERT INTO obat VALUES (null,'$gambar','$nama','$harga', '$kode')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM obat WHERE id = $id");
    return mysqli_affected_rows($conn);
}
?>
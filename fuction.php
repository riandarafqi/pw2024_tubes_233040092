<?php
$conn = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040092");

function query($query){
    // $conn = koneksi();
    global $conn;
    $result = mysqli_query($conn,$query);

// if(mysqli_num_rows($result)){
//     return mysqli_fetch_assoc($result);
// }

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>
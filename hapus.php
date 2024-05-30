<?php
require 'functions.php';
if(!isset($_GET['id'])){
    header("Location: latihan.php");
    exit;
}
$id = $_GET["id"] ;
if (hapus($id)>0){
    echo "
    <script>
    alert('data berhasil dihapus!');
    document.location.href= 'latihan.php';
    </script>
";
} else {
    echo "
    <script>
    alert('data gagal dihapus!');
    document.location.href= 'latihan.php';
    </script>
";
}
?>
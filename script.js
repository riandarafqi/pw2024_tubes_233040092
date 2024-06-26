// Preview Image untuk Tambah dan Ubah
function previewImage(){
    const gambar = document.querySelector('.gambar');
    const imgPreview = document.querySelector('.img-preview');

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    };
}

// Ambil elemen2 yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function(){
    
    // buat object ajax
    // var xhr = new XMLHttpRequest();

    // // cek kesiapan ajax
    // xhr.onreadystatechange = function(){
    //     if(xhr.readyState == 4 && xhr.status == 200){
    //         container.innerHTML = xhr.responseText;
    //     }
    // }

    // // eksekusi ajax
    // xhr.open('GET', 'ajax/obat.php?keyword=' + keyword.value, true);
    // xhr.send();

    // fetch()
    fetch('ajax/obat.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
})
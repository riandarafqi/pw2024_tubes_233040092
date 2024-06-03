function searchTable() {
    const input = document.getElementById("searchInput");
    const filter = input.value.toLowerCase();
    const table = document.getElementById("dataTable");
    const tr = table.getElementsByTagName("tr");

    for (let i = 1; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName("td");
        let rowContainsSearchText = false;
        
        for (let j = 0; j < td.length; j++) {
            if (td[j]) {
                if (td[j].innerText.toLowerCase().indexOf(filter) > -1) {
                    rowContainsSearchText = true;
                    break;
                }
            }
        }

        if (rowContainsSearchText) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
}

function logout() {
    // Tambahkan logika logout di sini
    alert('Logout button clicked');
}

function tambahDataObat() {
    // Tambahkan logika untuk menambah data obat di sini
    alert('Tambah Data Obat button clicked');
}

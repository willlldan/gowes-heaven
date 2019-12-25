var status;
// start form tambah

var save_method; //for save method string
var table;
var base_url = "http://localhost/gowes-heaven/";
$(document).ready(function () {
    $('#dataTable').DataTable();
});

// tampil modal
$('#formModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var title = button.data('title');
    if(title=='Edit Produk') {
        document.getElementById("nama").setAttribute('value', button.data('nama'));
        // document.getElementById("kategori").setAttribute('value', button.data('kategori'));
        document.getElementById("deskripsi").setAttribute('value', button.data('deskripsi'));
        // document.getElementById("harga").setAttribute('value', button.data('harga'));
        // document.getElementById("gambar").setAttribute('value', button.data('gambar'));
        
    }

    var modal = $(this)
    modal.find('.modal-title').text(title)
});

// ganti 'choose file....' di upload gambar
$('#image').on('change', function () {
    //get the file name
    var fileName = $(this).val();
    var cleanFileName = fileName.replace('C:\\fakepath\\', " ");
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(cleanFileName);
});

function validasiKategori() {
    var sel = document.getElementById("kategori");
    var opt = sel.selectedIndex;
    var inputKategori = document.getElementById("inputKategori");

    if (opt == 0) {
        inputKategori.style.display = "block";
    } else {
        inputKategori.style.display = "none";
    }
};

function validasiHarga() {
    var harga = document.getElementById("harga").value;
    var inputHarga = document.getElementById("inputHarga");
    var btnSave = document.getElementById("btnSave");
    if (isNaN(harga)) {
        inputHarga.style.display = "block";
        btnSave.setAttribute('disabled', 'true');
        return true;
    } else {
        inputHarga.style.display = "none";
        btnSave.removeAttribute('disabled');
    }
};

function validasi() {
    var statusHarga;
    var statusKategori;
    var harga = document.getElementById("harga").value;
    var sel = document.getElementById("kategori");
    var opt = sel.selectedIndex;
    var inputKategori = document.getElementById("inputKategori");
    if (harga != "") {
        if (isNaN(harga)) {
            inputHarga.style.display = "block";
            statusHarga = false;
        } else {
            inputHarga.style.display = "none";
            statusHarga = true;
        }
    }

    if (opt == 0) {
        inputKategori.style.display = "block";
        statusKategori = false;
    } else {
        inputKategori.style.display = "none";
        statusKategori = true;
    }

    if (statusHarga && statusKategori) {
        btnSave.removeAttribute('disabled');
    } else {
        btnSave.setAttribute('disabled', 'true');
    }
}

function editModal() {

}

function save() {
    var formData = new FormData($('#form')[0]);
    var url = base_url.concat('admin/tambah');
    console.log(url);
    $.ajax({
        url: url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            console.log(data);
            Swal.fire({
                title: 'Success!',
                text: 'Data berhasil ditambahkan',
                icon: 'success',
                confirmButtonText: 'Cool'
            })
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);

        }
    })


}

// end form tambah
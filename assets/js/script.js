function tampilkanSemuaMenu() {
    $.getJSON('productTest.json', function (data) {
        let product = data.product;
        $.each(product, function (i, data) {
            $('#daftar-menu').append('<div class="col-md-4"><div class="card mb-3"><img src="img/gowes-heaven/' + data.gambar + '" class="card-img-top" ><div class="card-body"><h5 class="card-title">' + data.nama);
        });
    });

}

tampilkanSemuaMenu();

$('.nav-link').on('click', function () {
    $('.nav-link').removeClass('active');
    $(this).addClass('active');

    let kategori = $(this).html();
    $('h1').html(kategori);

    if (kategori == 'All Menu') {
        $('#daftar-menu').html('');
        tampilkanSemuaMenu();
        return;
    }

    $.getJSON('productTest.json', function (data) {
        let product = data.product;
        let content = '';

        $.each(product, function (i, data) {
            if (data.kategori == kategori.toLowerCase()) {
                content += '<div class="col-md-4"><div class="card mb-3"><img src="img/gowes-heaven/' + data.gambar + '" class="card-img-top" ><div class="card-body"><h5 class="card-title">' + data.nama;
            }
        });
        $('#daftar-menu').html(content);
    });

});
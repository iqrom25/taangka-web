function previewimg(pict, label, preview) {
    const foto = document.querySelector('#' + pict);
    const labelFoto = document.querySelector('#' + label);
    const imgPreview = document.querySelector('.' + preview);


    labelFoto.textContent = foto.files[0].name;
    const fileFoto = new FileReader();
    fileFoto.readAsDataURL(foto.files[0]);

    fileFoto.onload = function (e) {
        imgPreview.src = e.target.result;
    }
}



$(document).ready(function () {

    // get Edit Product
    $('.btn-edit').on('click', function () {
        // get data from button edit
        const id = $(this).data('id');
        const foto = $(this).data('foto');
        const fotoPath = '/img/' + foto;
        // Set data to Form Edit
        $('#id').val(id);
        $('#fotoLama').val(foto);
        $('#labelEdit').text(foto);
        $('.img-preview-edit').attr('src', fotoPath);
        // Call Modal Edit
        $('#modal-edit').modal('show');
    });

    $('.btn-edit-pelayanan').on('click', function () {
        // get data from button edit
        const id = $(this).data('id');
        const nama = $(this).data('nama');
        const keterangan = $(this).data('keterangan');
        const icon = $(this).data('icon');
        const iconPath = '/img/' + icon;
        // Set data to Form Edit
        $('#id-pelayanan').val(id);
        $('#iconLama').val(icon);
        $('#label-icon-edit').text(icon);
        $('#iconPath').attr('src', iconPath);

        $('.edit-nama-pelayanan').val(nama);

        $('.edit-keterangan-pelayanan').val(keterangan);

        // Call Modal Edit
        $('#modal-edit-pelayanan').modal('show');
    });


    $('.btn-edit-portofolio').on('click', function () {
        // get data from button edit
        const id = $(this).data('id');
        const foto = $(this).data('foto');
        const kategori = $(this).data('kategori');
        const fotoPath = '/img/' + foto;
        // Set data to Form Edit
        $('#id').val(id);
        $('#fotoLama').val(foto);
        $('#label-porto-edit').text(foto);
        $('#preview-porto-edit').attr('src', fotoPath);
        $('#kategori_p-edit').val(kategori);
        // Call Modal Edit
        $('#modal-edit-portofolio').modal('show');
    });

    $('.btn-edit-kategori').on('click', function () {
        // get data from button edit
        const id = $(this).data('id');
        const nama = $(this).data('nama');
        // Set data to Form Edit
        $('#id-kategori').val(id);
        $('#nama-kategori').val(nama);
        // Call Modal Edit
        $('#modal-edit-kategori').modal('show');
    });

    $('.btn-edit-tim').on('click', function () {
        // get data from button edit
        const id = $(this).data('id');
        const foto = $(this).data('foto');
        const fotoPath = '/img/' + foto;
        const nama = $(this).data('nama');
        const posisi = $(this).data('posisi');
        const instagram = $(this).data('instagram');
        // Set data to Form Edit
        $('#id-tim').val(id);
        $('#fotoLama').val(foto);
        $('#label-foto-tim-edit').text(foto);
        $('.foto-tim-edit').attr('src', fotoPath);
        $('#nama-edit').val(nama);
        $('#posisi-edit').val(posisi);
        $('#instagram-edit').val(instagram);
        // Call Modal Edit
        $('#modal-tim-edit').modal('show');
    });

    $('.btn-edit-testimoni').on('click', function () {
        // get data from button edit
        const id = $(this).data('id');
        const foto = $(this).data('foto');
        const fotoPath = '/img/' + foto;
        // Set data to Form Edit
        $('#id-testimoni').val(id);
        $('#fotoLama').val(foto);
        $('#label-foto-testimoni-edit').text(foto);
        $('.foto-testimoni-edit').attr('src', fotoPath);
        // Call Modal Edit
        $('#modal-edit-testimoni').modal('show');
    });

    $('.btn-edit-profil').on('click', function () {
        // get data from button edit
        const id = $(this).data('id');
        const username = $(this).data('username');
        const foto = $(this).data('foto');
        const fotoPath = '/img/' + foto;
        // Set data to Form Edit
        $('#id').val(id);
        $('#username-edit').val(username);
        $('#usernameLama').val(username);
        $('#fotoLama').val(foto);
        $('#label-profil-edit').text(foto);
        $('.profil-edit').attr('src', fotoPath);
        // Call Modal Edit
        $('#modal-edit-profil').modal('show');
    });



    $('#reset').on('click', function () {

        $('.custom-file-label').text('Pilih foto');
        $('#label-icon').text('Pilih Icon');
        $('.img-preview').attr('src', '/img/default.jpg');
    });

    $('#add').on('click', function () {

        $('.custom-file-label').text('Pilih foto');
        $('#label-icon').text('Pilih Icon');
        $('.img-preview').attr('src', '/img/default.jpg');
    });


});




var editor = CKEDITOR.replace('penjelasan');
CKFinder.setupCKEditor(editor);
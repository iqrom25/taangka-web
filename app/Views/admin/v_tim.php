<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <?= $this->include('/admin/layout/topbar'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Tim Kreatif</h1>

            <a href="#modal-fade-tim" title="Tambah tim" id="add" class="btn btn-effect-ripple btn-primary mb-2" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Tim Kreatif</a>

            <?php if (session()->getFlashdata('pesan_b')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan_b'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('pesan_g')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('pesan_g'); ?>
                </div>
            <?php endif; ?>
            <!-- DataTales Example -->
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Tim Kreatif</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>
                                        <center> No</center>
                                    </th>
                                    <th>
                                        <center> Foto</center>
                                    </th>
                                    <th>
                                        <center>Nama</center>
                                    </th>
                                    <th>
                                        <center>Posisi</center>
                                    </th>
                                    <th>
                                        <center>Instagram</center>
                                    </th>
                                    <th>
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($tim as $t) : ?>
                                    <tr>
                                        <td width="10">
                                            <center> <?= $i ?></center>
                                        </td>
                                        <td>
                                            <center><img src="/img/<?= $t['foto']; ?>" width="80" height="80"></center>
                                        </td>
                                        <td>
                                            <center> <?= $t['nama'] ?></center>
                                        </td>
                                        <td>
                                            <center> <?= $t['posisi'] ?></center>
                                        </td>
                                        <td>
                                            <center> <a href="<?= $t['instagram'] ?>" target="_blank"><?= $t['instagram'] ?></a></center>
                                        </td>

                                        <td width="200">
                                            <center>
                                                <a href="#" class="btn btn-info btn-edit-tim" data-id="<?= $t['id']; ?>" data-foto="<?= $t['foto']; ?>" data-nama="<?= $t['nama']; ?>" data-posisi="<?= $t['posisi']; ?>" data-instagram="<?= $t['instagram']; ?>">Edit</a>
                                                <form action="/admin/delete/tim/<?= $t['id']; ?>" method="POST" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data ?');">Hapus</button>
                                                </form>
                                                <center>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <?= $this->include('/admin/layout/footer'); ?>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>





<!-- Regular Fade -->
<div id="modal-fade-tim" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Tim Kreatif</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/admin/tambahTim" method="post" class="form-bordered" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Foto</label>
                        <div class="col-sm-4">
                            <img src="/img/default.jpg" class="img-thumbnail img-preview foto-tim">
                        </div>
                        <div class="mt-2">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto-tim" name="foto-tim" onchange="previewimg('foto-tim','label-foto-tim','foto-tim')" required>
                                <label class="custom-file-label" id="label-foto-tim" for="foto">Pilih Foto</label>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('foto'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id=" nama" name="nama" value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <input type="text" class="form-control <?= ($validation->hasError('posisi')) ? 'is-invalid' : ''; ?>" id=" posisi" name="posisi" value="<?= old('posisi'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('posisi'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="instagram">instagram</label>
                        <input type="text" class="form-control <?= ($validation->hasError('instagram')) ? 'is-invalid' : ''; ?>" id=" instagram" name="instagram" value="<?= old('instagram'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('instagram'); ?>
                        </div>
                    </div>
                    <input type="hidden" id="image" name="image">

                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-effect-ripple btn-primary" id="tambah" name="tambah">Tambah</button>
                        <button type="reset" class="btn btn-effect-ripple btn-danger" id="reset" value="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Regular Fade -->

<!-- Regular Fade -->

<div id="modal-tim-edit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Tim Kreatif</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/admin/editTim" method="post" class="form-bordered" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Foto</label>
                        <div class="col-sm-4">
                            <img src="/img/default.jpg" class="img-thumbnail img-preview foto-tim-edit">
                        </div>
                        <div class="mt-2">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto-tim-edit" name="foto-tim" onchange="previewimg('foto-tim-edit','label-foto-tim-edit','foto-tim-edit')">
                                <label class="custom-file-label" id="label-foto-tim-edit" for="foto">Pilih Foto</label>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('foto'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama-edit" name="nama" value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <input type="text" class="form-control <?= ($validation->hasError('posisi')) ? 'is-invalid' : ''; ?>" id="posisi-edit" name="posisi" value="<?= old('posisi'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('posisi'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="instagram">instagram</label>
                        <input type="text" class="form-control <?= ($validation->hasError('instagram')) ? 'is-invalid' : ''; ?>" id="instagram-edit" name="instagram" value="<?= old('instagram'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('instagram'); ?>
                        </div>
                    </div>
                    <input type="hidden" id="image-edit" name="image-edit">
                    <input type="hidden" id="id-tim" name="id">
                    <input type="hidden" id="fotoLama" name="fotoLama">
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-effect-ripple btn-primary" id="ubah" name="ubah">Ubah</button>
                        <button type="reset" class="btn btn-effect-ripple btn-danger" id="reset" value="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Regular Fade -->





<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crop Image</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div id="image_demo" style="width:350px; margin-top:30px"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success crop_image">Crop & Upload Image</button>
            </div>
        </div>
    </div>
</div>













<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="/vendor/croppie/croppie.js"></script>
<?php if ($validation->getErrors() != null) : ?>

    <?php if (session()->getFlashdata('gagal_edit')) : ?>
        <script>
            $(document).ready(function() {
                $('#modal-edit-tim').modal('show');
            });
        </script>
    <?php else : ?>
        <script>
            $(document).ready(function() {
                $('#modal-fade-tim').modal('show');
            });
        </script>
    <?php endif; ?>
<?php endif; ?>

<script>
    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
            width: 300,
            height: 300,
            type: 'square' //circle
        },
        boundary: {
            width: 450,
            height: 450
        }
    });

    $('#foto-tim').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(event) {
            $image_crop.croppie('bind', {
                url: event.target.result
            }).then(function() {
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#uploadimageModal').modal({
            backdrop: 'static',
            keyboard: true,
            show: true
        });
    });
    $('#foto-tim-edit').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(event) {
            $image_crop.croppie('bind', {
                url: event.target.result
            }).then(function() {
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#uploadimageModal').modal({
            backdrop: 'static',
            keyboard: true,
            show: true
        });
    });

    $('.crop_image').click(function(event) {
        $image_crop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function(response) {

            $('#image').val(response);
            $('#image-edit').val(response);
            $('#uploadimageModal').modal('hide');
        })


    });
</script>
<?= $this->endSection(); ?>
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
            <h1 class=" mb-2 text-gray-800">Profil</h1>

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
            <div class="mt-5">
                <div class="form-group">
                    <h4>Foto</h4>
                    <img src="/img/<?= $profil['foto'] ?>" class="img-thumbnail" height="100" width="100">

                </div>
                <div class="form-group">
                    <h4>Username</h4>
                    <p><?= $profil['username'] ?></p>
                </div>
            </div>
            <a href="#" class="btn btn-info btn-edit-profil" data-id="<?= $profil['id']; ?>" data-foto="<?= $profil['foto']; ?>" data-username="<?= $profil['username']; ?>">Edit</a>
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
<div id="modal-edit-profil" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Profil</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/admin/editProfil/<?= $profil['id'] ?>" method="post" class="form-bordered" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Foto</label>
                        <div class="col-sm-4">
                            <img src="/img/default.jpg" class="img-thumbnail img-preview profil-edit" id="profil-edit">
                        </div>
                        <div class="mt-2">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto-profil" name="foto" onchange="previewimg('foto-profil','label-profil-edit','profil-edit')">
                                <label class="custom-file-label" id="label-profil-edit" for="foto">Pilih foto</label>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('foto'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control edit-username-profil <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username-edit" name="username" value="<?= old('username'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('username'); ?>
                        </div>
                    </div>
                    <input type="hidden" id="id" name="id">
                    <input type="hidden" id="fotoLama" name="fotoLama">
                    <input type="hidden" id="usernameLama" name="usernameLama">
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-effect-ripple btn-primary" name="tambah">Ubah</button>
                        <button type="reset" class="btn btn-effect-ripple btn-danger" id="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Regular Fade -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<?php if ($validation->getErrors() != null) : ?>

    <?php if (session()->getFlashdata('gagal_edit')) : ?>
        <script>
            $(document).ready(function() {
                $('#modal-edit-profil').modal('show');
            });
        </script>
    <?php endif; ?>
<?php endif; ?>

<?= $this->endSection(); ?>
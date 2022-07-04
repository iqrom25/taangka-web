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
            <h1 class="h3 mb-2 text-gray-800 text-center mb-3">Tambah Paket</h1>


            <form action="/admin/savePaket" method="POST" class="form-bordered" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="nama">Nama Paket</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id=" nama" name="nama">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Paket</label>
                    <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga">
                    <div class="invalid-feedback">
                        <?= $validation->getError('harga'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="penjelasan">Brosur </label>
                    <div class="col-sm-4">
                        <img src="/img/default.jpg" class="img-thumbnail img-preview brosur">
                    </div>
                    <div class="mt-2">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('brosur')) ? 'is-invalid' : ''; ?>" id="brosur" name="brosur" onchange="previewimg('brosur','label-brosur','brosur')">
                            <label class="custom-file-label" id="label-brosur" for="brosur">Pilih brosur</label>
                            <div class="invalid-feedback">
                                <?= $validation->getError('brosur'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>

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




<?= $this->endSection(); ?>
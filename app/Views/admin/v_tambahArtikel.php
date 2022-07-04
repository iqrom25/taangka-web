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
            <h1 class="h3 mb-2 text-gray-800 text-center mb-3">Tambah Artikel</h1>


            <form action="/admin/saveArtikel" method="POST" class="form-bordered" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label>Thumbnail</label>
                    <div class="col-sm-4">
                        <img src="/img/default.jpg" class="img-thumbnail img-preview foto-thumbnail">
                    </div>
                    <div class="mt-2">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('thumbnail')) ? 'is-invalid' : ''; ?>" id="foto-thumbnail" name="thumbnail" onchange="previewimg('foto-thumbnail','label-foto-thumbnail','foto-thumbnail')">
                            <label class="custom-file-label" id="label-foto-thumbnail" for="foto-thumbnail">Pilih foto</label>
                            <div class="invalid-feedback">
                                <?= $validation->getError('thumbnail'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= old('judul') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('judul'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="highlight">Highlight Artikel</label>
                    <input type="text" class="form-control <?= ($validation->hasError('highlight')) ? 'is-invalid' : ''; ?>" id="highlight" name="highlight" value="<?= old('highlight') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('highlight'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="penjelasan">Artikel</label>
                    <textarea name="penjelasan" id="penjelasan"><?= old('penjelasan') ?></textarea>
                    <?php if ($validation->hasError('penjelasan')) : ?>
                        <small class="text-danger pl-3"><?= $validation->getError('penjelasan'); ?></small>
                    <?php endif; ?>
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
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
            <h1 class="h3 mb-2 text-gray-800 text-center mb-3">Ubah Password</h1>


            <form action="/admin/updatePassword/<?= $user['id'] ?>" method="POST" class="form-bordered">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="passwordLama">Password Lama</label>
                    <input type="password" class="form-control <?= (session()->getFlashdata('password_salah')) ? 'is-invalid' : ''; ?>" id="passwordLama" name="passwordLama">
                    <div class="invalid-feedback">
                        <?= session()->getFlashdata('pesan_b'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="passwordBaru">Password Baru</label>
                    <input type="password" class="form-control <?= ($validation->hasError('passwordBaru')) ? 'is-invalid' : ''; ?>" id="passwordBaru" name="passwordBaru">
                    <div class="invalid-feedback">
                        <?= $validation->getError('passwordBaru'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="konfirmasiPassword">Konfirmasi Password</label>
                    <input type="password" class="form-control <?= ($validation->hasError('konfirmasiPassword')) ? 'is-invalid' : ''; ?>" id="konfirmasiPassword" name="konfirmasiPassword">
                    <div class="invalid-feedback">
                        <?= $validation->getError('konfirmasiPassword'); ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Ubah</button>
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
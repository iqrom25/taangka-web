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
            <h1 class="h3 mb-2 text-gray-800">Data Kategori Portofolio</h1>

            <a href="#modal-fade-kategori" title="Tambah kategori" id="add" class="btn btn-effect-ripple btn-primary mb-2" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Kategori</a>

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
                    <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
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
                                        <center> Nama</center>
                                    </th>
                                    <th>
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($kategori as $k) : ?>
                                    <tr>
                                        <td width="10">
                                            <center> <?= $i ?></center>
                                        </td>
                                        <td width="200">
                                            <center> <?= $k['nama'] ?></center>
                                        </td>

                                        <td width="200">
                                            <center>
                                                <a href="#" class="btn btn-info btn-edit-kategori" data-id="<?= $k['id']; ?>" data-nama="<?= $k['nama']; ?>">Edit</a>
                                                <form action="/admin/delete/kategori/<?= $k['id']; ?>" method="POST" class="d-inline">
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
<div id="modal-fade-kategori" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Kategori</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/admin/tambahKategori" method="post" class="form-bordered">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama Kategori</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id=" nama" name="nama" value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
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
<div id="modal-edit-kategori" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Kategori</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/admin/editKategori" method="post" class="form-bordered">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama Kategori</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama-kategori" name="nama" value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>

                    <input type="hidden" id="id-kategori" name="id">
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
                $('#modal-edit-kategori').modal('show');
            });
        </script>
    <?php else : ?>
        <script>
            $(document).ready(function() {
                $('#modal-fade-kategori').modal('show');
            });
        </script>
    <?php endif; ?>
<?php endif; ?>

<?= $this->endSection(); ?>
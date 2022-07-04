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
            <h1 class="h3 mb-2 text-gray-800">Data Pelayanan</h1>

            <a href="#modal-fade-pelayanan" title="Tambah Pelayanan" id="add" class="btn btn-effect-ripple btn-primary mb-2" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Pelayanan</a>

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
                    <h6 class="m-0 font-weight-bold text-primary">Data Pelayanan</h6>
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
                                        <center> Icon</center>
                                    </th>
                                    <th>
                                        <center>Nama</center>
                                    </th>
                                    <th>
                                        <center>Keterangan</center>
                                    </th>
                                    <th>
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($pelayanan as $p) : ?>
                                    <tr>
                                        <td width="10">
                                            <center> <?= $i ?></center>
                                        </td>
                                        <td>
                                            <center><img src="/img/<?= $p['icon']; ?>" width="80" height="80"></center>
                                        </td>
                                        <td>
                                            <center> <?= $p['nama'] ?></center>
                                        </td>
                                        <td>
                                            <center> <?= $p['keterangan'] ?></center>
                                        </td>

                                        <td width="200">
                                            <center>
                                                <a href="#" class="btn btn-info btn-edit-pelayanan" data-id="<?= $p['id']; ?>" data-icon="<?= $p['icon']; ?>" data-nama="<?= $p['nama']; ?>" data-keterangan="<?= $p['keterangan']; ?>">Edit</a>
                                                <form action="/admin/delete/pelayanan/<?= $p['id']; ?>" method="POST" class="d-inline">
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
<div id="modal-fade-pelayanan" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Pelayanan</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/admin/tambahPelayanan" method="post" class="form-bordered" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Icon</label>
                        <div class="col-sm-4">
                            <img src="/img/default.jpg" class="img-thumbnail img-preview icon">
                        </div>
                        <div class="mt-2">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('icon')) ? 'is-invalid' : ''; ?>" id="icon" name="icon" onchange="previewimg('icon','label-icon','icon')">
                                <label class="custom-file-label" id="label-icon" for="icon">Pilih Icon</label>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('icon'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pelayanan</label>
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id=" nama" name="nama" value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan Pelayanan</label>
                        <input type="text" class="form-control <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id=" keterangan" name="keterangan" value="<?= old('keterangan'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('keterangan'); ?>
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
<div id="modal-edit-pelayanan" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Pelayanan</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/admin/editPelayanan" method="post" class="form-bordered" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Icon</label>
                        <div class="col-sm-4">
                            <img src="/img/default.jpg" class="img-thumbnail img-preview icon-edit" id="iconPath">
                        </div>
                        <div class="mt-2">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('icon')) ? 'is-invalid' : ''; ?>" id="icon-edit" name="icon" onchange="previewimg('icon-edit','label-icon-edit','icon-edit')">
                                <label class="custom-file-label" id="label-icon-edit" for="icon">Pilih Icon</label>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('icon'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pelayanan</label>
                        <input type="text" class="form-control edit-nama-pelayanan <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id=" nama" name="nama" value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan Pelayanan</label>
                        <input type="text" class="form-control edit-keterangan-pelayanan <?= ($validation->hasError('keterangan')) ? 'is-invalid' : ''; ?>" id=" keterangan" name="keterangan" value="<?= old('keterangan'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('keterangan'); ?>
                        </div>
                    </div>
                    <input type="hidden" id="id-pelayanan" name="id">
                    <input type="hidden" id="iconLama" name="iconLama">
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
                $('#modal-edit-pelayanan').modal('show');
            });
        </script>
    <?php else : ?>
        <script>
            $(document).ready(function() {
                $('#modal-fade-pelayanan').modal('show');
            });
        </script>
    <?php endif; ?>
<?php endif; ?>

<?= $this->endSection(); ?>
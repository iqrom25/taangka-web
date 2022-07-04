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
            <h1 class="h3 mb-2 text-gray-800">Data Portofolio</h1>

            <a href="#modal-fade-portofolio" title="Tambah Portofolio" id="add" class="btn btn-effect-ripple btn-primary mb-2" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Portofolio</a>


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
                    <h6 class="m-0 font-weight-bold text-primary">Data Portofolio</h6>
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
                                        <center> Kategori</center>
                                    </th>
                                    <th>
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($portofolio as $p) : ?>
                                    <tr>
                                        <td width="10">
                                            <center> <?= $i ?></center>
                                        </td>
                                        <td>
                                            <center><img src="/img/<?= $p['foto']; ?>" height="200"></center>
                                        </td>

                                        <td>
                                            <center> <?= $kategori_p[$i - 1] ?></center>
                                        </td>
                                        <td width="200">
                                            <center>
                                                <a href="#modal-edit-portofolio" class="btn btn-info btn-edit-portofolio" data-toggle="modal" data-id="<?= $p['id']; ?>" data-foto="<?= $p['foto']; ?>" data-kategori="<?= $kategori_p[$i - 1] ?>">Edit</a>
                                                <form action="/admin/delete/portofolio/<?= $p['id']; ?>" method="POST" class="d-inline">
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
<div id="modal-fade-portofolio" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Portofolio</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/admin/tambahPortofolio" method="post" class="form-bordered" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Foto</label>
                        <div class="col-sm-4">
                            <img src="/img/default.jpg" class="img-thumbnail img-preview foto-portofolio">
                        </div>
                        <div class="mt-2">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto-portofolio" name="foto" onchange="previewimg('foto-portofolio','label-portofolio','foto-portofolio')" required>
                                <label class="custom-file-label" for="foto" id="label-portofolio">Pilih Foto</label>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Kategori</label>
                        <select class="form-control" id="kategori_p" name="kategori_p">
                            <?php foreach ($kategori as $k) : ?>
                                <option><?= $k['nama'] ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                    <input type="hidden" id="kategori" name="kategori" value="portofolio">
                    <div class="form-group form-actions">
                        <button type="submit" class="btn btn-effect-ripple btn-primary" id="tambah" name="tambah">Tambah</button>
                        <button type="reset" class="btn btn-effect-ripple btn-danger" id="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END Regular Fade -->

<!-- EdIt Regular Fade -->
<div id="modal-edit-portofolio" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Portofolio</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/admin/editPortofolio" method="post" class="form-bordered" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label>Foto</label>
                        <div class="col-sm-4">
                            <img src="/img/default.jpg" class="img-thumbnail porto-edit" id="preview-porto-edit">
                        </div>
                        <div class="mt-2">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('porto')) ? 'is-invalid' : ''; ?>" id="porto-edit" name="porto" onchange="previewimg('porto-edit','label-porto-edit','porto-edit')">
                                <label class="custom-file-label" id="label-porto-edit" for="porto">Pilih Foto</label>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('porto'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kategori</label>
                            <select class="form-control" id="kategori_p-edit" name="kategori_p">
                                <?php foreach ($kategori as $k) : ?>
                                    <option value="<?= $k['nama'] ?>"><?= $k['nama'] ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </div>
                    <input type="hidden" id="kategori" name="kategori" value="portofolio">
                    <input type="hidden" id="id" name="id">
                    <input type="hidden" id="fotoLama" name="fotoLama">
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



<?= $this->endSection(); ?>
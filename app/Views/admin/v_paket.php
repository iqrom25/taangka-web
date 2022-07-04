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
            <h1 class="h3 mb-2 text-gray-800">Data Paket</h1>

            <a href="/admin/tambahPaket" title="Tambah Paket" id="add" class="btn btn-effect-ripple btn-primary mb-2"><i class="fa fa-plus"></i> Tambah Paket</a>

            <?php if (session()->getFlashdata('pesan_b')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan_b'); ?>
                </div>
            <?php endif; ?>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Paket</h6>
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
                                        <center>Harga</center>
                                    </th>
                                    <th>
                                        <center>Aksi</center>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($paket as $p) : ?>
                                    <tr>
                                        <td width="10">
                                            <center> <?= $i ?></center>
                                        </td>
                                        <td width="100">
                                            <center>
                                                <?= $p['nama']; ?>
                                            </center>
                                        </td>
                                        <td width="80">
                                            <center>
                                                <?= $p['harga']; ?>
                                            </center>
                                        </td>
                                        <td width="200">
                                            <center>
                                                <a href="/admin/detailPaket/<?= $p['id'] ?>" class="btn btn-success ">Detail</a>
                                                <a href="/admin/editPaket/<?= $p['id'] ?>" class="btn btn-info btn-edit" ?>Edit</a>
                                                <form action="/admin/delete/paket/<?= $p['id']; ?>" method="POST" class="d-inline">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data ?');">Hapus</button>
                                                </form>
                                            </center>
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




<?= $this->endSection(); ?>
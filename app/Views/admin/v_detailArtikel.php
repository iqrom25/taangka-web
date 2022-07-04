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
            <h1 class="h3 mb-5 text-gray-800">Detail artikel</h1>

            <div class="kotak-portofolio">
                <div class="container">
                    <div class="row mt-5">
                        <div class="container">
                            <?= $artikel['artikel']; ?>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>

            <div class="container mt-5 text-center">
                <a href="/admin/editArtikel" class="btn btn-info btn-edit" ?>Edit</a>
                <form action="/admin/delete/artikel/<?= $artikel['id']; ?>" method="POST" class="d-inline">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data ?');">Hapus</button>
                </form>
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
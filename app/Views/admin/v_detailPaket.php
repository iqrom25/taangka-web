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
            <h1 class="h3 mb-5 text-gray-800">Detail Paket</h1>

            <?php $harga = $paket['harga'] / 1000000; ?>
            <div class="align-items-center">
                <div class="price-grid center">
                    <h2 class="text-center mb-3">Model Kartu</h2>
                    <div class="text-center price-block agile">
                        <div class="price-gd-top">
                            <h4><?= $paket['nama'] ?></h4>
                            <div class="garis-judul"></div>
                            <h4>
                                <span class="dollar-sign">Mulai dari Rp </span><?= $harga ?>
                                <span class="price-meta">juta</span>
                            </h4>
                        </div>
                        <div class="garis-harga"></div>

                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li>Praweeding</li>
                                    <li>Pinangan</li>
                                    <li>Pemberkatan & Resepsi</li>
                                    <li>Extra Ta'angka</li>
                                </ul>
                            </div>
                            <div class="price-selet">
                                <a href="#">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center">
                <h2 class="text-center mb-3">Detail</h2>
                <div class="kotak-portofolio">
                    <div class="container ml-3 mr-3">
                        <p class="mt-3 text-center">
                            <img src="/img/<?= $paket['brosur']; ?>" class="mt-3 text-center" alt="" width="1000" height="600">
                        </p>

                        <a href="#" class="tombol-paket text-white btn btn-lg mb-5">
                            <i class="fab fa-whatsapp" style="font-size: 25px;"></i>
                            Pesan Sekarang
                        </a>
                        <br>
                    </div>
                </div>
            </div>

            <div class="container mt-5 text-center">
                <a href="/admin/editPaket/<?= $paket['id']; ?>" class="btn btn-info btn-edit" ?>Edit</a>
                <form action="/admin/delete/paket/<?= $paket['id']; ?>" method="POST" class="d-inline">
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
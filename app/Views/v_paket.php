<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<!--  ======================= Start Main Area ================================ -->

<main class="site-main">
    <!--  ======================= Start Banner Area =======================  -->
    <?php
    $namaPaket = $paketPilih['nama'];
    $arrayNama = explode(" ", $namaPaket);
    $nama = "";
    foreach ($arrayNama as $a) {
        $nama = $nama . $a . '%20';
    }
    $link = "https://api.whatsapp.com/send?phone=628113828890&text=Halo%20saya%20ingin%20memesan%20" . $nama;

    ?>

    <section class="site-banner">
        <div class=" container" style="margin-top: 150px;">
            <div class="row">
                <div class="col-lg-12 text-center services-title">
                    <h1 class=" title-text" style="font-size: 30px;"><?= $paketPilih['nama']; ?></h1>
                    <div class="garis "></div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="kotak-portofolio">
                <div class="container page-top">
                    <div class="row mt-5">
                        <div class="container mt-5 mb-5" id="paket">
                            <a href="/img/<?= $paketPilih['brosur']; ?>"><img src="/img/<?= $paketPilih['brosur']; ?>" alt=""></a>
                            <div class="site-buttons">
                                <div class="d-flex flex-row flex-wrap">
                                    <a href="<?= $link; ?>" class="tombol-paket text-white btn btn-lg">
                                        <i class="fab fa-whatsapp" style="font-size: 25px;"></i>
                                        Pesan Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<!--  ========================= Footer Area ==========================  -->
<?= $this->include('/layout/footer'); ?>
<!--  ========================= End Footer Area ==========================  -->

<script>
    $(document).ready(function() {
        $(function() {
            $('img').removeAttr('style');
        });
    });
</script>
<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<!--  ======================= Start Main Area ================================ -->

<main class="site-main">

    <!--  ======================= Start Banner Area =======================  -->

    <section class="site-banner">
        <div class=" container" style="margin-top: 150px;">
            <div class="row">
                <div class="col-lg-12 text-center services-title">
                    <h1 class=" title-text" style="font-size: 30px;">Artikel </h1>
                    <div class="garis "></div>
                </div>
            </div>


            <!-- Page Content -->
            <div class="kotak-portofolio">
                <div class="container page-top">



                    <div class="row mt-5">

                        <div class="col-lg-12 text-center services-title">
                            <h1 class=" title-text" style="font-size: 30px;"><?= $artikel['judul']; ?></h1>
                        </div>
                        <div class="container" id="artikel">
                            <?= $artikel['artikel']; ?>
                        </div>
                    </div>
                    <br><br>
                </div>
            </div>
            <div class="kotak-portofolio" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-lg-12 text-center services-title">
                        <h1 class=" title-text" style="font-size: 30px;">Artikel Lainnya</h1>
                        <div class="garis "></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-cols-2 ">
                        <?php foreach ($dataArtikel as $d) : ?>
                            <?php if ($d['id'] != $artikel['id']) : ?>
                                <div class="card mt-3 mb-5 mx-auto" style="max-width: 540px;">
                                    <div class="row no-gutters">
                                        <div class="col-md-4">
                                            <img src="/img/<?= $d['thumbnail'] ?>" class="card-img ml-1 mt-1" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <a href="/home/artikel/<?= $d['id']; ?>">
                                                    <h5 class="card-title"><?= $d['judul'] ?></h5>
                                                </a>
                                                <p class="card-text"><?= $d['highlight'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
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
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<!--  ======================= Start Main Area ================================ -->

<main class="site-main">
    <!--  ======================= Start Banner Area =======================  -->
    <section class="site-banner">
        <div class=" container" style="margin-top: 150px;">
            <div class="row">
                <div class="col-lg-12 text-center services-title">
                    <h1 class=" title-text" style="font-size: 30px;">Portofolio</h1>
                    <div class="garis "></div>
                    <p class="container mt-3" style="width: 580px; font-size: 20px;">
                        beberapa foto hasil dari project-project yang pernah kami kerjakan
                    </p>
                    <div class="row justify-content-center">
                        <div class="col-5 text-center">
                            <form action="/home/portofolio" method="POST" id="formKategori">
                                <div class="form-group row">
                                    <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select id="kategori" class="form-control" name="kategori">
                                            <option value="Semua">Semua</option>
                                            <?php foreach ($kategori as $k) : ?>
                                                <option value="<?= $k['nama']; ?>"><?= $k['nama']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Page Content -->
            <div class="kotak-portofolio">
                <div class="container page-top">
                    <div class="row" style="margin-top: -70px;">
                        <?php if ($foto != null) : ?>
                            <?php foreach ($foto as $f) : ?>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="/img/<?= $f['foto']; ?>" class="fancybox" rel="ligthbox">
                                        <img src="/img/<?= $f['foto']; ?>" class="zoom img-fluid " alt="">
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p class="tengah">Maaf belum ada portofolio untuk kategori yang dipilih</p>
                        <?php endif; ?>
                    </div>
                    <?php if ($foto != null) : ?>
                        <?= $pager->links('galeri', 'custom_pagination') ?>
                    <?php endif; ?>
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
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });

        $('#kategori').on('change', function() {
            $("#formKategori").submit();
        });

        $(function() {
            $("#kategori").val('<?= $kategoriTerpilih; ?>');
        });
    });
</script>
<?= $this->endSection(); ?>
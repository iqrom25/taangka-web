<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<!--  ======================= Start Main Area ================================ -->

<main class="site-main">
    <!--  ======================= Start Banner Area =======================  -->
    <section class="site-banner">
        <div class="container banner-awal">
            <div class="row">
                <div class="container">
                    <div class="hiasan1"></div>
                    <div class="hiasan2"></div>
                </div>
                <div class="col-lg-6 col-md-6 site-title slogan">
                    <h3 class="title-text">Ta’angka Event Organizer</h3>
                    <h1 class="title-text font-weight-bold">
                        Menikah Sonde mau Repot? Biarkan kami yang Repot!
                    </h1>
                    <div class="site-buttons">
                        <div class="d-flex flex-row flex-wrap">
                            <a href="https://api.whatsapp.com/send?phone=628113828890&text=Halo%20saya%20tertarik%20dengan%20Ta'angka%20EO" class="tombol1 text-white btn btn-lg" target="_blank">
                                Hubungi Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 foto-slideshow" style="margin-top: 30px">
                    <div class="slideshow-container mt-3">
                        <?php foreach ($slideshow as $s) : ?>
                            <div class="mySlides myfade">
                                <div>
                                    <img src="/img/<?= $s['foto']; ?>" class="gambar-slide" height="400" />
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!--  ======================= End Banner Area =======================  -->




    <!--  ========================= Penawaran Area ==========================  -->

    <section class="services-area" id="penawaran">
        <div class="container kotak2">
            <div class="row">
                <div class="col-lg-12 text-center services-title">
                    <h1 class="title-text judul-penawaran">
                        Mengapa Harus Memilih Kami ?
                    </h1>
                    <div class="container">
                        <p class="keterangan-penawaran">
                            Ta'angka Event Organizer merupakan satu-satunya EO yang harga
                            paketnya bisa dinego
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container kotak3">
            <div class="about-area">
                <div class="carousel row box-penawaran">
                    <div class="owl-carousel">
                        <div class="card-pelayanan">
                            <img src="konsul.jpg" class="card-img-top gambar-penawaran" />
                            <div class=" card-body isi-card-penawaran">
                                <h5 class="card-title font-weight-bold judul-item-penawaran">
                                    Konsultasi
                                </h5>

                                <p class="card-text isi-item-penawaran">
                                    Anda Dapat berkonsultasi dengan kami untuk membuat acara
                                    wedding menjadi luar biasa. Masalah Deal apa Tidak Itu Hal
                                    Berikutnya.
                                </p>
                            </div>
                        </div>

                        <div class="card-pelayanan">
                            <img src="rencana.jpg" class="card-img-top gambar-penawaran" />
                            <div class="card-body isi-card-penawaran">
                                <h5 class="card-title font-weight-bold judul-item-penawaran">
                                    Perencanaan
                                </h5>

                                <p class="card-text isi-item-penawaran">
                                    Setelah Deal, Maka anda akan di pertemukan dengan All Team
                                    Ta’angka untuk berbicara tentang konsep prewedding sampai
                                    dengan Wedding, di Ta’angka Semua Terkonsep dan Terencana.
                                </p>
                            </div>
                        </div>

                        <div class="card-pelayanan">
                            <img src="deal.jpg" class="card-img-top gambar-penawaran" />
                            <div class="card-body isi-card-penawaran">
                                <h5 class="card-title font-weight-bold judul-item-penawaran">
                                    Wedding
                                </h5>

                                <p class="card-text isi-item-penawaran">
                                    Saat Wedding Anda akan di temanin dengan Assisten Yang
                                    Prof di Bidangnya dan Banyak Bonus-Bonus Spesial Dari
                                    Ta’angka Event Organizer yang menjadikan moment special
                                    anda sungguh berkesan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  ========================= End Penawaran Area ==========================  -->





    <!--  ========================= Paket Area ==========================  -->

    <section class="services-area" id="paket">
        <div class="hiasan3"></div>
        <div class="hiasan4"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center services-title">
                    <h1 class="title-text">Paket Pernikahan</h1>
                    <div class="garis"></div>
                    <p class="container mt-3 slogan-paket">
                        Kami Menyediakan beragam pilihan Paket pernikahan yang sesuai
                        dengan budget yang anda miliki
                    </p>
                </div>
            </div>
            <div class="plans-section box-paket">
                <div class="priceing-table-main justify-content-center row">
                    <?php foreach ($paket as $p) : ?>
                        <?php $harga = $p['harga'] / 1000000; ?>
                        <div class="price-grid">
                            <div class="price-block agile">
                                <div class="price-gd-top">
                                    <h4><?= $p['nama']; ?></h4>
                                    <div class="garis-judul"></div>
                                    <h4>
                                        <span class="dollar-sign">Mulai dari Rp </span><?= $harga; ?>
                                        <span class="price-meta">juta</span>
                                    </h4>
                                </div>
                                <div class="garis-harga"></div>

                                <div class="price-gd-bottom">
                                    <div class="price-list">
                                        <ul>
                                            <li>Praweeding</li>
                                            <li>Pinangan</li>
                                            <li>Pemberkatan & Reseosi</li>
                                            <li>Extra Ta'angka</li>
                                        </ul>
                                    </div>
                                    <div class="price-selet">
                                        <a href="/home/paket/<?= $p['id']; ?>">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="hiasan5"></div>
        </div>
    </section>

    <!--  ========================= End Paket Area ==========================  -->




    <!-- ========================= Pelayanan Area ========================== -->

    <section class="area-pelayanan" id="pelayanan">
        <div class="container">
            <div class="row jus">
                <div class="col-lg-12 text-center services-title">
                    <div class="col-lg-12 text-center services-title">
                        <h1 class="title-text text-pelayanan">Pelayanan</h1>
                        <div class="garis"></div>
                        <p class="container mt-3" style="width: 500px; font-size: 17px">
                            Beberapa pelayanan yang kami tawarkan adalah sebagai berikut
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="kotak4">
            <div class="pelayanan-slide about-area">
                <div class="carousel row">
                    <div class="owl-carousel">
                        <?php foreach ($pelayanan as $p) : ?>
                            <div class="justify-content-center">
                                <img src="/img/<?= $p['icon']; ?>" style="
                                    width: 80px;
                                    height: 80px; margin:0 auto;
                                " class="text-center" />
                                <div class="card-body">
                                    <h5 class="card-title text-center" style="
                                        font-size: 35px;
                                        margin-top: -10px;
                                    ">
                                        <?= $p['nama']; ?>
                                    </h5>
                                    <p class="card-text pelayanan-text text-center" style=" font-size: 15px; width: 250px; margin:0 auto;">
                                        <?= $p['keterangan']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  ========================= End Pelayanan Area ==========================  -->

    <!--  ========================= Portofolio Area ==========================  -->

    <section class="site-banner" style="margin-top: 100px" id="portofolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 site-title">
                    <h1 class="title-text">Portofolio</h1>
                    <div class="garis" style="margin-left: 0"></div>
                    <p class="" style="width: 320px; font-size: 17px; margin-top: 20px">
                        Terima kasih sudah mempercayakan Ta'angka EO sebagai Event
                        Organizer dan Planner terbaik. Portofolio kami untuk menunjukkan
                        kepada anda tentang Proyek yang pernah ada.
                    </p>
                    <div class="mt-3">
                        <div class="" style="margin-top: 80px">
                            <a href="/home/portofolio" class="tombol1 text-white btn btn-lg">
                                lebih banyak
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 border" style="margin-top: 30px">
                    <div class="slideshow-container mt-3">
                        <div class="hiasan8"></div>
                        <?php $i = 1; ?>
                        <?php foreach ($portofolio as $p) : ?>
                            <div class="mySlidesShow myfade">
                                <div>
                                    <img src="/img/<?= $p['foto']; ?>" class="gambar-slideShow" />
                                </div>
                            </div>
                            <?php
                            if ($i == 5) {
                                break;
                            }
                            ?>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>

    <!--  ========================= End Portofolio Area ==========================  -->

    <!--  ========================= Tim Area ==========================  -->
    <section class="tim-area" id="tim">
        <div class="container">
            <div class="row jus">
                <div class="col-lg-12 text-center services-title">
                    <div class="col-lg-12 text-center services-title">
                        <h1 class="title-text" style="font-size: 35px">Tim Kreatif</h1>
                        <div class="garis"></div>
                        <p class="container mt-3" style="width: 500px; font-size: 17px">
                            Di bawah, anggota Kreatif yang bertanggung jawab atas layanan
                            di Ta’angka Event Organizer
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about2-area">
            <div class="carousel">
                <div class="hiasan9"></div>
                <div class="owl-carousel">
                    <?php foreach ($tim as $t) : ?>
                        <div class="kotak-tim">
                            <a href="<?= $t['instagram']; ?>" target="_blank"><img src="/img/<?= $t['foto']; ?>" class="gambar-tim" style="width: 50%" /></a>
                            <div class="nama-kerja">
                                <p class="pelayanan-text" style="text-align: center; font-size: 25px">
                                    <?= $t['nama']; ?>
                                </p>
                                <div class="garis-tim"></div>
                                <p class="pelayanan-text" style="text-align: center; font-size: 25px">
                                    <?= $t['posisi']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>

    <!--  ========================= End Tim Area ==========================  -->

    <!--  ========================= Testimoni Area ==========================  -->
    <section class="site-banner" id="testimoni">
        <div class="container-max">
            <div class="kotak-testimoni"></div>
            <div class="row" style="margin-top: -430px; margin-right: 50px">
                <div class="col-4">
                    <div class="container testi">
                        <div class="col-lg-6 col-md-6 site-title">
                            <p class="text-white judul-testi">Testimoni</p>
                            <div class="garis-testi"></div>
                            <p class="text-white text-testi">
                                Beberapa testimoni dari orang-orang yang telah mempercayakan
                                acara mereka pada kami
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="about4-area" id="testi">
                        <div class="carousel owl-carousel">
                            <?php foreach ($testimoni as $t) : ?>
                                <div class="col-lg-12">
                                    <div class="col-lg-12">
                                        <div class="card-testi card-1">
                                            <img src="/img/<?= $t['foto']; ?>" height="400" />
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  ========================= End Testimoni Area ==========================  -->

    <!--  ========================= Artikel Area ==========================  -->
    <div class="hiasan10"></div>
    <div class="hiasan11"></div>
    <section class="services-area" style="margin-top: -250px" id="artikel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center services-title">
                    <h1 class="title-text">Artikel</h1>
                    <div class="garis"></div>
                    <p class="container mt-3" style="width: 580px; font-size: 20px">
                        Beberapa artikel kami mengenai Wedding Organizer yang bisa
                        Menambah Wawasan anda
                    </p>
                </div>
            </div>
        </div>
        <div class="pelayanan-slide about-area">
            <div class="carousel row">
                <div class="owl-carousel">
                    <?php foreach ($artikel as $a) : ?>
                        <div class="artikel">
                            <img src="/img/<?= $a['thumbnail']; ?>" style="
                                     width: 325px;
                                    height: 388px;
                                    margin-left: auto;
                                    margin-right: auto;
                                    " />
                            <div class="card-body">
                                <h5 class="judul-artikel"><a href="/home/artikel/<?= $a['id']; ?>"><?= $a['judul']; ?></a></h5>
                                <p class="card-text artikel-text">
                                    <?= $a['highlight']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <div class="hiasan12"></div>
        <div class="hiasan13"></div>
    </section>

    <!--  ========================= End Artikel Area ==========================  -->

    <!--  ========================= Tentang_Kami Area ==========================  -->
    <section class="site-banner" style="margin-top: 200px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 site-title">
                    <h1 class="title-text tentang-kami-text">Tentang Kami</h1>
                    <div class="garis-tentang-kami" style="margin-left: 0"></div>
                    <p class="" style="width: 290px; font-size: 20px; margin-top: 20px">
                        Menikah tidak mau repot ? Biarkan Kami yang Repot!! Ta’angka
                        Event Organizer merupakan Layanan Perencanaan Pernikahan. Kami
                        juga menerima Jasa Foto dan Video, Maternity, New Born, Ulang
                        Tahun, Iklan Produk, etc.
                    </p>
                </div>
                <div class="col-lg-6 col-md-12" style="margin-top: 30px">
                    <iframe src="https://drive.google.com/file/d/1QrycqBVCMWemctXRJ5nxw4zlDB4Sye_O/preview" class="video-profile" allow="autoplay"></iframe>
                    <div class="hiasan14"></div>
                </div>

                <!-- <div class="hiasan8"></div> -->
            </div>
        </div>
    </section>
</main>
<!--  ========================= End Tentang_Kami Area ==========================  -->

<!--  ========================= Footer Area ==========================  -->
<?= $this->include('/layout/footer'); ?>
<!--  ========================= End Footer Area ==========================  -->


<?= $this->endSection(); ?>
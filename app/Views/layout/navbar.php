    <!--  ======================= Start Header Area ============================== -->

    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center">
            <a href="/" class="logo mr-auto"><img src="/logo.png" width="100" height="75" alt="logo" class="img-fluid" /></a>
            <nav class="main-nav d-none d-lg-block">
                <ul>
                    <li class="active"><a href="/">Beranda</a></li>
                    <li class="drop-down">
                        <a href="<?php redirect()->to(base_url()); ?>/#paket">Paket<i class="fas fa-chevron-down ml-2"></i></a>
                        <ul>
                            <?php foreach ($paket as $p) : ?>
                                <li><a href="/home/paket/<?= $p['id']; ?>"><?= $p['nama']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li><a href="<?php redirect()->to(base_url()); ?>/#pelayanan">Pelayanan</a></li>
                    <li><a href="<?php redirect()->to(base_url()); ?>/#portofolio">Portofolio</a></li>
                    <li><a href="<?php redirect()->to(base_url()); ?>/#tim">Tim</a></li>
                    <li><a href="<?php redirect()->to(base_url()); ?>/#testimoni">Testimoni</a></li>
                    <li><a href="<?php redirect()->to(base_url()); ?>/#artikel">Artikel</a></li>
                </ul>
            </nav>
            <!-- .main-nav-->
        </div>
    </header>
    <!-- End Header -->

    <!--  ======================= End Header Area ============================== -->
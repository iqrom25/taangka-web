    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="/img/icon.png" width="70" height="50">
                </div>
                <div class="sidebar-brand-text mx-3">Ta'angka Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/admin/slideshow">
                    <i class="far fa-images"></i>
                    <span>Slide Show</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/paket">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Paket</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/pelayanan">
                    <i class="fas fa-boxes"></i>
                    <span>Pelayanan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-photo-video"></i>
                    <span>Portofolio</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/admin/portofolio">Foto</a>
                        <a class="collapse-item" href="/admin/kategori">Kategori</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/tim">
                    <i class="fas fa-users"></i>
                    <span>Tim Kreatif</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/testimoni">
                    <i class="fas fa-comment-alt"></i>
                    <span>Testimoni</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/admin/artikel">
                    <i class="fas fa-newspaper"></i>
                    <span>Artikel</span>
                </a>
            </li>
            <?php if ($level == "0") : ?>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/administrator">
                        <i class="fas fa-users-cog"></i>
                        <span>Administrator</span>
                    </a>
                </li>
            <?php endif; ?>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
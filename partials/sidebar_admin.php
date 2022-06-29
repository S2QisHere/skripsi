<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link px-5">
        <img src="assets/img/logo1.png" alt="AdminLTE Logo" width="100%">
        <!-- <span class="brand-text font-weight-light">Jingga Kreatif</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/img/sy.jpg" style="height:55px; width:55px; object-fit: cover;" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $_SESSION['nama']; ?></a>
                <a href="#" class="d-block"><?= $_SESSION['level']; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] == "") ? "active" : "")  : "active" ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="?page=klien" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] == "klien") ? "active" : "")  : "" ?>">
                        <i class="nav-icon fa fa-users" aria-hidden="true"></i>
                        <p>
                            Data Klien
                        </p>
                    </a>
                </li>
                <li class="nav-item <?= isset($_GET['page']) ? ((in_array($_GET['page'], ['konsep', 'produksi', 'equipment', 'talent'])) ? "menu-open" : "")  : "" ?>">
                    <a href="#" class="nav-link <?= isset($_GET['page']) ? ((in_array($_GET['page'], ['konsep', 'produksi', 'equipment', 'talent'])) ? "active" : "")  : "" ?>">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="?page=konsep" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] == "konsep") ? "active" : "")  : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Konsep</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=produksi" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] == "produksi") ? "active" : "")  : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=equipment" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] == "equipment") ? "active" : "")  : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Equipment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=talent" class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] == "talent") ? "active" : "")  : "" ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Talent</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Proses Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="riwayat_meeting.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengajuan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="jadwal_meeting.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jadwal Meeting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="anggaran.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Anggaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Laporan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/general.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Klien</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Karyawan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/buttons.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Konsep/Tema</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/sliders.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/modals.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Equipment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/navbar.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Talent</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/timeline.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengajuan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/ribbons.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Anggaran</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
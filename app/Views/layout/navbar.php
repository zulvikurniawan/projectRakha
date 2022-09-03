<?php $user = session()->get('user') ?>

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/img/logoPakuHaji.jpg" alt="KecPakuHaji" height="300" width="300">
</div>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-light mr-auto shadow">
    <!-- Left navbar links -->
    <nav class="navbar-nav">
        <div class="navbar-nav">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </div>
    </nav>

    <!-- Right navbar links -->
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link <?= ($SidebarMenuActive == 'profile') ? 'active' : '' ?>" href="/Profile/<?= $user['id_account']; ?>">Profile <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/login/logout">Logout <span class="sr-only">(current)</span></a>
        </div>
    </div>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-2">
    <!-- Brand Logo -->
    <a href="/Dashboard" class="brand-link" style="text-decoration:none">
        <img src="/img/logoPakuHaji.jpg" alt="KecPakuHaji" class="brand-image elevation-2" style="opacity: 1">
        <span class="brand-text font-weight-light">Kecamatan Pakuhaji</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info ml-4">
                <a href="/Profile/<?= $user['id_account']; ?>" class="d-block" style="text-decoration:none"><?= $user['nama']; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item mb-3">
                    <a href="/Dashboard" class="nav-link <?= ($SidebarMenuOpen == 'dashboard') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <?php if ($user['id_jabatan'] == 4) : ?>
                    <li class="nav-item mb-3">
                        <a href="/Admin" class="nav-link <?= ($SidebarMenuOpen == 'admin') ? 'active' : '' ?>">
                            <i class="nav-icon fa-solid fa-file-pen"></i>
                            <p>
                                Admin
                            </p>
                        </a>
                    </li>
                <?php endif; ?>

                <li class="nav-item mb-3 <?= ($SidebarMenuOpen == 'masyarakat') ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= ($SidebarMenuOpen == 'masyarakat') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Data Masyarakat
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/Masyarakat" class="nav-link <?= ($SidebarMenuActive == 'masyarakat') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/Masyarakat/report" class="nav-link <?= ($SidebarMenuActive == 'report') ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Report</p>
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
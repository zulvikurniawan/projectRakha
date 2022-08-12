<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
            <a class="nav-item nav-link <?= ($currentSidebarMenu == 'profile') ? 'active' : '' ?>" href="/Profile">Profile <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link <?= ($currentSidebarMenu == 'admin') ? 'active' : '' ?>" href="/Admin">Admin <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/login">Logout <span class="sr-only">(current)</span></a>
        </div>
    </div>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/Dashboard" class="brand-link" style="text-decoration:none">
        <img src="/img/logoPakuhajiWhite.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Kecamatan Pakuhaji</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/img/fotoProfil.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/profile" class="d-block" style="text-decoration:none">Rakha</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href=" /Dashboard" class="nav-link <?= ($currentSidebarMenu == 'dashboard') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/Masyarakat" class="nav-link <?= ($currentSidebarMenu == 'masyarakat') ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Data Masyarakat
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
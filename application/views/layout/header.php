<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Data Lembaga</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/') ?>img/favicon.png" rel="icon">
    <link href="<?= base_url('assets/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?= base_url('Mahasiswa') ?>" class="logo d-flex align-items-center">
                <img src="<?= base_url('assets') ?>/img/logo.png" alt="">
                <span class="d-none d-lg-block">BPF TI B 2023</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" alt="Profile"
                            class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            <?= $user['nama']; ?>
                        </span>
                    </a><!-- End Profile Iamge Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>
                                <?= $user['nama']; ?>
                            </h6>
                            <span>
                                <?= $user['email']; ?>
                            </span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('auth/logout'); ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('Mahasiswa') ?>">
                    <i class='bx bx-code-alt' style="font-size: 1.5em;"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <?php if ($user['role'] == 'Admin') { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#mahasiswa-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>Mahasiswa</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="mahasiswa-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="<?= site_url('Mahasiswa/') ?>">
                                <i class="bi bi-circle"></i><span>Data Mahasiswa</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('Mahasiswa/tambah') ?>">
                                <i class="bi bi-circle"></i><span>Form Mahasiswa</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Mahasiswa Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#prodi-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>Prodi</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="prodi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href=" <?= site_url('Prodi/') ?>">
                                <i class="bi bi-circle"></i><span>Data Prodi</span>
                            </a>
                        </li>
                        <li>
                            <a href=" <?= site_url('Prodi/tambah') ?>">
                                <i class="bi bi-circle"></i><span>Form Prodi</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Prodi Nav -->
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#pinjol-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>Pinjaman Online</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="pinjol-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href=" <?= site_url('Pinjol/') ?>">
                                <i class="bi bi-circle"></i><span>Data Pinjaman Online</span>
                            </a>
                        </li>
                        <li>
                            <a href=" <?= site_url('Pinjol/tambah') ?>">
                                <i class="bi bi-circle"></i><span>Form Pinjaman Online</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Pinjol Nav -->
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-journal-text"></i><span>User</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href=" <?= site_url('Profil/') ?>">
                                <i class="bi bi-circle"></i><span>Profil Card</span>
                            </a>
                        </li>
                        <li>
                            <a href=" <?= site_url('Poster') ?>">
                                <i class="bi bi-circle"></i><span>Poster</span>
                            </a>
                        </li>
                        <li>
                            <a href=" <?= site_url('Auth/logout') ?>">
                                <i class="bi bi-circle"></i><span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Pinjol Nav -->
            <?php } ?>
        </ul>
    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Kelola
                <?= $kategori; ?>
            </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <?= $kategori; ?>
                    </li>
                    <li class="breadcrumb-item active">
                        <?= $judul; ?>
                    </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
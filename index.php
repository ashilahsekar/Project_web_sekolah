<?php
session_start();
include 'connection.php';

if(!isset($_SESSION['username'])){
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PROFIL SEKOLAH - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">SMKN 71 JAKARTA</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Mau cari apa?" aria-label="Mau cari apa?" aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
           <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user fa-fw"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end"  aria-labelledby="navbarDropdown">
            <li><a class="nav-link"  style="color: black !important;" href="logout.php">Logout</a></li>
        </ul>
    </li>
</ul>

        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">HOME</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                PROFIL SEKOLAH
                            </a>
                            <div class="sb-sidenav-menu-heading">CORE</div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Pendidik & Tenaga Pendidik
                                
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Manajemen Sekolah</a>
                                    
                                    <a class="nav-link" href="layout-static-copy.html">Guru Jurusan</a>
                                    <a class="nav-link" href="layout-static-light.html">Guru Mata Pelajaran Umum</a>
                                    <a class="nav-link" href="layout-sidenav-light-copy.html">Tata Usaha</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Organisasi
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-caraka.html">Caraka</a>
                                    <a class="nav-link" href="layout-mpk.html">MPK</a>
                                    <a class="nav-link" href="layout-osis.html">OSIS</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Ekstrakulikuler
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-teater.html">Teater</a>
                                    <a class="nav-link" href="layout-basket.html">Basket</a>
                                    <a class="nav-link" href="layout-paskibra.html">Paskibra</a>
                                    <a class="nav-link" href="layout-futsal.html">Futsal</a>
                                    <a class="nav-link" href="layout-tari-tradisional.html">Tari Tradisional</a>
                                    <a class="nav-link" href="layout-coding-club.html">Coding Club</a>
                                </nav>
                            </div>
                            
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    
                                    
                                    
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div> ashilah sekar
                    </div>
                </nav>
            </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">SELAMAT DATANG DI</h1>
                    <ol class="breadcrumb mb-4">
                        <li><h5 class="breadcrumb-item active">UNGGUL DALAM MUTU, TELADAN BERPERILAKU</h5></li>
                    </ol>
                    <div class="content">
                        <img src="gs.jpg" alt="">
                        <h1 style="margin-top: 5rem; font-size: 30px;">Sejarah</h1>
                        <p style="font-size: 15px; margin-bottom: 1rem;">SMK Negeri 71 Jakarta berlokasi di Jl Dr Radjiman Widyaningrat. Pulo Jahe Cakung Jakarta Timur. Sekolah ini merupakan salah satu Sekolah unit Baru (USB) yang memulai proses pembangunannya pada tahun 2019. Selama proses pembangunan yang memakan waktu kurang lebih 1 (satu) tahun, kegiatan belajar mengajar dilaksanakan di SMK Negei 46 Jakarta yang terletak di Jl B7 Cipinang Pulo Jakarta Timur. Ibu Oom Siti Halimah, MM adalah Plt kepala sekolah SMK Negeri 71 Jakarta yang mulai bertugas pada bulan Juli 2019 – Januari 2021. Pada di akhir bulan Januari 2021, Bapak Drs Wantarip ditunjuk sebagai Kepala Sekolah SMK Negeri 71 Jakarta untuk selama kurang lebih 1 (satu) bulan, dikarenakan beliau akan memasuki masa purnabakti.</p>
                        <p style="font-size: 15px; margin-bottom: 5rem;">Di awal bulan Februari 2021, Ibu Oom Siti Halimah, MM kembali bertugas sebagai Plt. Kepala SMK Negeri 71 Jakarta selama kurang lebih 6 (enam) bulan. Diakhir bulan Agustus 2021, Bapak Drs Lambas Pakpahan,MM di tunjuk sebagai Kepala SMK Negeri 71 Jakarta sampai saat ini. SMK Negeri 71 Jakarta dengan luas bangunan 4000 m^2, memiliki 3 (tiga) Kompetensi Keahlian yaitu Kompetensi Keahlian Rekayasa Perangkat Lunak, Desain Komunikasi Visual dan Animasi serta dilengkapi dengan sarana prasarana untuk menunjang proses pembelajaran. Pada bulan Juni 2022 SMK Negeri 71 Jakarta telah menamatkan pertama kali 104 siswa pada tiga kompetensi tersebut diatas. Sebagian siswa tamatan ini telah bekerja, melanjutkan pendidikan serta berwirausaha pada sebagian siswa lainnya.</p>
                        <h1 style="margin-top: 1rem; font-size: 30px;">Kompetensi Keahlian</h1>
                        </div>
                    <div style="margin-bottom: 1rem; display: flex; justify-content: space-around;" class="content-wrapper">
                        <div class="content1">
                            <h1 style="margin-top: 0rem; font-size: 20px;">1. Rekayasa Perangkat Lunak</h1>
                            <img src="rpl.png" alt="">
                            <h1 style="margin-top: 0rem; font-size: 15px;">Di RPL siswa belajar membangun solusi digital yang inovatif, menguasai bahasa pemrograman, dan merancang aplikasi yang relevan di era digital.</h1>
                        </div>
                        <div class="content2">
                            <h1 style="margin-top: 0rem; margin-bottom: 1rem; font-size: 20px;">2. Animasi</h1>
                            <img src="anm.png" alt="">
                            <h1 style="margin-top: 1rem; font-size: 15px;">Program Animasi kami mengajarkan seni visual dalam gerakan, mempersiapkan siswa untuk berkarya dalam industri hiburan, periklanan, dan multimedia dengan teknologi terkini.</h1>
                        </div>
                        <div class="content3">
                            <h1 style="margin-top: 0rem; margin-bottom: 0rem; font-size: 20px;">3. Desain Komunikasi Visual</h1>
                            <img src="dkv.png" alt="">
                            <h1 style="margin-top: 0rem; font-size: 15px;">Program DKV membentuk siswa menjadi desainer visual yang mampu menyampaikan pesan melalui media grafis, dengan fokus pada estetika dan efektivitas.</h1>
                        </div>
                    </div>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

    <script>
    let timeout;

    // Fungsi untuk mengarahkan pengguna ke halaman login
    function redirectToLogin() {
        window.location.href = './logout.php';
    }

    // Fungsi untuk mereset timer
    function resetTimer() {
        clearTimeout(timeout); // Menghentikan timer sebelumnya
        timeout = setTimeout(redirectToLogin, 6000); // Menetapkan timer baru untuk 3 detik
    }

    // Menetapkan event-event yang akan mereset timer saat terjadi aktivitas
    window.onload = resetTimer;
    window.onmousemove = resetTimer;
    window.onkeypress = resetTimer;
    window.onscroll = resetTimer;
</script>

</body>
</html>

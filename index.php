<!DOCTYPE html>
<html lang="en">

<head>
    <!--- Basic Page Needs  -->
    <meta charset="utf-8">
    <title>Beranda | Informatika</title>
    <!-- Mobile Specific Meta  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!--<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/magnificpopup.css">
    <link rel="stylesheet" href="assets/css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="assets/css/typography.css">-->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Muli|Titillium+Web&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    //memulai session
    session_start();
    //isset akan mengecek apakah variabel ada isinya atau tidak 
    //dalam hal ini variabel $_SESSION["username"] diinisiasi/diisikan value-nya waktu proses login
    //sehingga dipakai untuk mengecek apakah sudah login atau belum.
    //kl variabel $_SESSION["username"] kosong berarti belum login sehingga tdk akan ditampilkan link logout
    
    
    ?>
    <!-- preloader area start 
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    -->

    <!-- preloader area end -->
    <!-- header area start -->
    <header id="header">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="menu-area">
                        <!--<div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/icon/logobyecycle.png" alt="Sepeda.in">Sepeda.in</a>
                            </div> 
                        </div>-->
                        <div class="col-md-9 hidden-xs hidden-sm">
                            <div class="main-menu">
                                <nav class="nav-menu">
                                    <ul>
                                        <li><a href="othernya/lecturer_index.php">Data Dosen</a></li>
                                        <li><a href="othernya/student_index.php">Data Mahasiswa</a></li>
                                        <li><a href="othernya/subject_index.php">Data Mata Kuliah</a></li>
                                        <li><a href="othernya/frs_index.php">Data FRS</a></li>
                                        <li><a href="login_new.php">Logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12 visible-sm visible-xs">
                            <div class="mobile_menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- header area end -->
    <!-- slider area start -->
    <section id="home" class="slider-area background-video">
        <!-- bacground video start-->

        <!-- bacground video end-->


        <div class="container">
            <div class="col-md-6 col-sm-6 hidden-xs">
                <div class="row">
                    <div class="slider-img">
                        <img src="images/logo_if.png" alt="slider image">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="slider-inner text-right">
                        <h2>Selamat datang Website Informatika</h2>
                        <br>
                        <!-- <h5>Disini akan membahas seputar info sepeda, mulai dari tips, dan lain-lain.</h5> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider area end -->
    <!-- service area start -->
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="service-single">
                        <h2>Data Dosen</h2>
                        <a href="othernya/lecturer_input.php"><p>Tambah</p>
                        <a href="othernya/lecturer_index.php"><p>Lihat Data</p>
                    </div>
                </a></div> 
                <!--<div class="col-md-4 col-sm-4 col-xs-12">-->
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="service-single">
                        <h2>Data Mahasiswa</h2>
                        <a href="othernya/student_input.php"><p>Tambah</p>
                        <a href="othernya/student_index.php"><p>Lihat Data</p> 
                    </div>
                </a></div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="service-single">
                        <h2>Data Mata Kuliah</h2>
                        <a href="othernya/subject_input.php"><p>Tambah</p>
                        <a href="othernya/subject_index.php"><p>Lihat Data</p>
                    </div>
                </a></div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="service-single">
                        <h2>Data FRS</h2>
                        <a href="othernya/frs_input.php"><p>Pilih / Tambah</p>
                        <a href="othernya/frs_index.php"><p>Lihat Data</p>
                    </div>
                </a></div>
            </div>
        </div>
    </div>
    <br>
    <!-- footer area start -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <p>Copyright 2020 - Kelompok HAJI KADAP - Informatika 18 - Institut Teknologi Kalimantan</p>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- Scripts -->
    <script src="assets/js/jquery-3.2.0.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script src="assets/js/theme.js"></script>
<!--
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    -->
</body>

</html>
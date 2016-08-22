<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Beranda | Lab IF</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <script type="text/javascript">
            function validasi(formlogin) {
                var user = document.formlogin.username.value;
                var pass = document.formlogin.password.value;

                if ((user === "") || (pass === "")) {
                    $(document).ready(function () {
                        $("#pesan").html("<b>Warning!</b> Username atau Kata sandi masih kosong!");
                        $("#pesan").show();
                    });
                    return(false);
                }
                return(true);
            }
        </script>
    </head><!--/head-->

    <body class="homepage">
        <?php
        include "koneksi.php";
        //        menampilkan pesan jika ada pesan
        if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
            echo '<div class="pesan" align="center">' . $_SESSION['pesan'] . '</div>';
        }
        //        mengatur session pesan menjadi kosong
        $_SESSION['pesan'] = '';
        ?>
        <header id="header">
            <?php
            if (empty($_SESSION['username'])) {
                include './comp/navbar1.php';
            } else {
                include './comp/navbar2.php';
            }
            ?>
        </header><!--header-->

        <section id="main-slider" class="no-margin">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slider" data-slide-to="1"></li>
                    <li data-target="#main-slider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                    <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                        <div class="container">
                            <div class="row slide-margin">
                                <div class="col-sm-6">
                                    <div class="carousel-content">
                                        <h1 class="animation animated-item-1">Praktikum Laboratorium Teknik Informatika</h1>
                                        <h2 class="animation animated-item-2">Dapatkan informasi mengenai kegiatan praktikum yang diselenggarakan Program Studi Teknik Informatika</h2>
                                        <a class="btn-slide animation animated-item-3" href="praktikum.php">Menuju Halaman</a>
                                    </div>
                                </div>

                                <div class="col-sm-6 hidden-xs animation animated-item-4">
                                    <div class="slider-img">
                                        <img src="images/slider/img1.png" class="img-responsive">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!--/.item-->

                    <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                        <div class="container">
                            <div class="row slide-margin">
                                <div class="col-sm-6">
                                    <div class="carousel-content">
                                        <h1 class="animation animated-item-1">Monitoring Laboratoum Teknik Informatika</h1>
                                        <h2 class="animation animated-item-2">Lihat keadaan Laboratorium secara langsung melalui video streaming</h2>
                                        <a class="btn-slide animation animated-item-3" href="monitoring.php">Menuju Halaman</a>
                                    </div>
                                </div>

                                <div class="col-sm-6 hidden-xs animation animated-item-4">
                                    <div class="slider-img">
                                        <img src="images/slider/img2.png" class="img-responsive">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!--/.item-->

                    <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                        <div class="container">
                            <div class="row slide-margin">
                                <div class="col-sm-6">
                                    <div class="carousel-content">
                                        <h1 class="animation animated-item-1">Absensi Praktikum Laboratorium</h1>
                                        <h2 class="animation animated-item-2">Cek kehadiran praktikum yang sedang atau yang telah dilaksanakan</h2>
                                        <a class="btn-slide animation animated-item-3" href="absensi.php">Menuju Halaman</a>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs animation animated-item-4">
                                    <div class="slider-img">
                                        <img src="images/slider/img3.png" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.item-->
                </div><!--/.carousel-inner-->
            </div><!--/.carousel-->
            <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
                <i class="fa fa-chevron-left"></i>
            </a>
            <a class="next hidden-xs" href="#main-slider" data-slide="next">
                <i class="fa fa-chevron-right"></i>
            </a>
        </section><!--/#main-slider-->

        <section id="feature" >
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Fitur</h2>
                    <p class="lead">Berikut beberapa fitur yang dapat diakses melalui website Laboratorium Teknik Informatika ITENAS</p>
                </div>

                <div class="row">
                    <div class="features">
                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-bullhorn"></i>
                                <h2>Info Praktikum</h2>
                                <h3>Informasi mengenai peserta praktikum,absensi, nilai, dll.</h3>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-comments"></i>
                                <h2>Topik TA</h2>
                                <h3>Informasi judul TA yang dapat dijadikan referensi</h3>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-cloud-download"></i>
                                <h2>Arsip & Dokumentasi</h2>
                                <h3>Download file yang berkaitan dengan lab. dan praktikum</h3>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-leaf"></i>
                                <h2>Inventaris</h2>
                                <h3>Melihat data invertaris laboratorium</h3>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-cogs"></i>
                                <h2>Peminjaman Alat</h2>
                                <h3>Melakukan request peminjaman peralatan lab.</h3>
                            </div>
                        </div><!--/.col-md-4-->

                        <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="feature-wrap">
                                <i class="fa fa-heart"></i>
                                <h2>Dan Lain-lai</h2>
                                <h3>Masih ada fitur lain yang dapat diakses</h3>
                            </div>
                        </div><!--/.col-md-4-->
                    </div><!--/.services-->
                </div><!--/.row-->    
            </div><!--/.container-->
        </section><!--/#feature-->

        <section id="recent-works">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Monitoring</h2>
                    <p class="lead">
                        Menampilkan secara langsung keadaan ruangan Laboratorium Teknik Informatika ITENAS
                    </p>
                </div>

                <div class="row">
                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap wow fadeInDown" data-wow-delay="300ms">
                            <img class="img-responsive" src="images/portfolio/recent/item1.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Lab DasKom</a></h3>
                                    <p>
                                        Praktikum : <br>
                                        - Pemrograman Dasar <br>
                                        - Organisasi & Arsitektur Komputer
                                    </p>
                                    <a class="preview" href="http://10.243.114.103:8080/video" rel="prettyPhoto"><i class="fa fa-eye"></i> Mulai Streaming</a>
                                </div> 
                            </div>
                        </div>
                    </div>  

                    <div class="portfolio-item joomla bootstrap col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap wow fadeInDown" data-wow-delay="600ms">
                            <img class="img-responsive" src="images/portfolio/recent/item2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Lab Multimedia</a></h3>
                                    <p>
                                        Praktikum : <br>
                                        - Pemrograman Robot Cerdas <br>
                                        - Jaringan Syaraf Tiruan
                                    </p>
                                    <a class="preview" href="images/portfolio/full/item2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Mulai Streaming</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item bootstrap wordpress col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap wow fadeInDown" data-wow-delay="900ms">
                            <img class="img-responsive" src="images/portfolio/recent/item3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Lab JarKom</a></h3>
                                    <p>
                                        Praktikum : <br>
                                        - Jaringan Komputer <br>
                                        - Rekayasa Web
                                    </p>
                                    <a class="preview" href="images/portfolio/full/item3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Mulai Streaming</a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item joomla wordpress apps col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap wow fadeInDown" data-wow-delay="1200ms">
                            <img class="img-responsive" src="images/portfolio/recent/item4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Lab BasDat</a></h3>
                                    <p>
                                        Praktikum : <br>
                                        - Basis Data <br>
                                        - Pemrograman Basis Data <br>
                                        - Pemrograman Berorientasi Objek
                                    </p>
                                    <a class="preview" href="images/portfolio/full/item4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Mulai Streaming</a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
                </div><!--/.row-->
            </div><!--/.container-->
        </section><!--/#recent-works-->

        <section id="services" class="service-item">
            <div class="container">
                <div class="center wow fadeInDown">
                    <h2>Praktikum</h2>
                    <p class="lead">Informasi kegiatan praktikum Laboratorium Teknik Informatika ITENAS</p>
                </div>

                <div class="row">

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=PEMDAS">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services1.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">PEMDAS</h3>
                                    <p>Pemrograman <br> Dasar</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=ORKOM">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services2.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">ORKOM</h3>
                                    <p>Organisasi & Arsitektur Komputer</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=PRC">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services3.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">PRC</h3>
                                    <p>Pemrograman <br> Robot Cerdas</p>
                                </div>
                            </div>
                        </a>
                    </div>  

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=JARKOM">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services4.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">JARKOM</h3>
                                    <p>Jaringan <br> Komuputer</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=REKWEB">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services5.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">REKWEB</h3>
                                    <p>Rekayasa <br> Web</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=JST">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services6.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">JST</h3>
                                    <p>Jaringan Syaraf <br> Tiruan</p>
                                </div>
                            </div>
                        </a>
                    </div>                                                

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=BASDAT">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services3.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">BASDAT</h3>
                                    <p>Basis <br> Data</p>
                                </div>
                            </div>
                        </a>
                    </div>                                                

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=PBD">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services2.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">PBD</h3>
                                    <p>Pemrograman <br> Basis Data</p>
                                </div>
                            </div>
                        </a>
                    </div>                                                

                    <div class="col-sm-6 col-md-4">
                        <a href="lab_praktikum.php?kategori=PBO">
                            <div class="media services-wrap wow fadeInDown">
                                <div class="pull-left">
                                    <img class="img-responsive" src="images/services/services1.png">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">PBO</h3>
                                    <p>Pemrograman <br> Berorientasi Objek</p>
                                </div>
                            </div>
                        </a>
                    </div>                                                
                </div><!--/.row-->
            </div><!--/.container-->
        </section><!--/#services-->

        <section id="bottom">
            <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Company</h3>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">We are hiring</a></li>
                                <li><a href="#">Meet the team</a></li>
                                <li><a href="#">Copyright</a></li>
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>    
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Refund policy</a></li>
                                <li><a href="#">Ticket system</a></li>
                                <li><a href="#">Billing system</a></li>
                            </ul>
                        </div>    
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Developers</h3>
                            <ul>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">SEO Marketing</a></li>
                                <li><a href="#">Theme</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Email Marketing</a></li>
                                <li><a href="#">Plugin Development</a></li>
                                <li><a href="#">Article Writing</a></li>
                            </ul>
                        </div>    
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <h3>Our Partners</h3>
                            <ul>
                                <li><a href="#">Adipisicing Elit</a></li>
                                <li><a href="#">Eiusmod</a></li>
                                <li><a href="#">Tempor</a></li>
                                <li><a href="#">Veniam</a></li>
                                <li><a href="#">Exercitation</a></li>
                                <li><a href="#">Ullamco</a></li>
                                <li><a href="#">Laboris</a></li>
                            </ul>
                        </div>    
                    </div><!--/.col-md-3-->
                </div>
            </div>
        </section><!--/#bottom-->

        <footer id="footer" class="midnight-blue">
            <?php include './comp/footer.php'; ?>
        </footer><!--/#footer-->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="admin/scripts/jquery.min.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Blog Single | Corlate</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <script type="text/javascript">
            $(document).ready(function () {
                $('[data-toggle="popover"]').popover({
                    placement: 'right'
                });
            });
        </script>  
        <script type="text/javascript">
            function validasi(formreg) {
                var nip = document.forms["formreg"]["kode"].value;
                var numbers = /^[0-9]+$/;

                if (!nip.match(numbers)) {
                    alert("ID harus berupa angka ...");
                    formreg.kode.focus();
                    formreg.kode.value = '';
                    return(false);
                }
                return(true);
            }
        </script>
        <script type="text/javascript">
            function ConfirmPassword() {
                var pass = document.formreg.sandi.value;
                var Cpass = document.formreg.konfirmasi.value;
                var cek = document.getElementById('statusPassword');

                if (Cpass !== pass) {
                    cek.className = 'icon-remove';
                } else {
                    cek.className = 'icon-ok';
                }

                if (pass === "" || Cpass === "") {
                    cek.className = '';
                }
            }
        </script>
    </head><!--/head-->

    <body>
        <header id="header">
            <?php
            if (empty($_SESSION['username'])) {
                include './comp/navbar1.php';
            } else {
                include './comp/navbar2.php';
            }
            ?>
        </header><!--/header-->

        <section id="contact-info">
            <div class="center wow fadeInDown">                
                <h2>Registrasi</h2>
                <p class="lead">Untuk dapat mengakses fitur yang lebih lengkap silakan regstrasi terlebih dahulu</p>
            </div>
            <div class="container wow fadeInDown" data-wow-delay="300ms"> 
                <div class="row contact-wrap"> 
                    <div class="status alert alert-success" style="display: none"></div>
                    <form class="form-horizontal" name="formreg" method="post" action="process/daftar_proses.php">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-group">
                                <label>ID *</label>
                                <input type="text" name="kode" class="form-control" required="required" maxlength="9" placeholder="Masukkan NID / NRP" autofocus>
                            </div>
                            <div class="form-group">
                                <label>Kata Sandi *</label>
                                <input type="password" name="sandi" class="form-control" required="required" maxlength="6" placeholder="Masukkan Kata Sandi">
                            </div>
                            <div class="form-group">
                                <label>Konfirmasi Kata Sandi *</label>
                                <input type="password" name="konfirmasi" class="form-control" required="required" maxlength="6" placeholder="Masukkan Kembali Kata Sandi">
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap *</label>
                                <input type="text" name="nama" class="form-control" required="required" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin *</label>
                                <select name="jk" class="form-control" required>
                                    <option value="">- Pilih -</option>
                                    <option value="L">Laki - laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir *</label>
                                <input type="date" class="form-control" name="tgl" required="required">
                            </div>
                            <div class="form-group">
                                <label>No. HP</label>
                                <input type="text" class="form-control" name="telp" required="required" placeholder="Masukkan Nomor HP">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" required="required" style="height: 150px; max-height: 200px;resize: vertical" placeholder="Masukkan Alamat"></textarea>
                            </div>  
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="submit">
                            </div>
                        </div>
                    </form> 
                </div><!--/.row-->
            </div><!--/.container-->
        </section>  <!--/gmap_area -->

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
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
    </body>
</html>
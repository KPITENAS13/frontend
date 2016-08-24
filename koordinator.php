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
        <title>Koor. Praktikum| Lab IF</title>

        <!-- core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header">
            <?php
            if (empty($_SESSION['username'])) {
                include './comp/navbar1.php';
            } else if ($_SESSION['kategori'] == "mahasiswa") {
                include './comp/navbar2.php';
            } else if ($_SESSION['kategori'] == "dosen") {
                include './comp/navbar3.php';
            }
            ?>
        </header><!--/header-->

        <section id="feature">
            <div class="center wow fadeInDown">
                <h2>
                    Koordinator Praktikum <br>
                    <?php
                    if ($_GET['kategori'] == "PEMDAS") {
                        echo 'Pemrograman Dasar';
                    } else if ($_GET['kategori'] == "ORKOM") {
                        echo 'Organisasi & Arsitektur Komputer';
                    } else if ($_GET['kategori'] == "PBD") {
                        echo 'Pemrograman Basis Data';
                    } else if ($_GET['kategori'] == "PRC") {
                        echo 'Pemrograman Robot Cerdas';
                    } else if ($_GET['kategori'] == "JARKOM") {
                        echo 'Jaringan Komputer';
                    } else if ($_GET['kategori'] == "REKWEB") {
                        echo 'Rekayasa Web';
                    } else if ($_GET['kategori'] == "JST") {
                        echo 'Jaringan Syaraf Tiruan';
                    } else if ($_GET['kategori'] == "BASDAT") {
                        echo 'Basis Data';
                    } else if ($_GET['kategori'] == "PBO") {
                        echo 'Pemrograman Berorientasi Objek';
                    }
                    echo ' Periode ' . $_GET['periode'];
                    ?>
                </h2>
                <p class="lead">
                    Pusat informasi kegiatan praktikum Laboratorium Teknik Informatika ITENAS
                </p>
            </div>
            <div class="container">
                <div class="row contact-wrap">
                    <div class="col-sm-12 wow fadeInDown" data-wow-delay="300ms">
                        <div class="tab-wrap">
                            <div class="media">
                                <div class="parrent pull-left">
                                    <ul class="nav nav-tabs nav-stacked">
                                        <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Request Asisten</a></li>
                                        <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Daftar Nilai Praktikan</a></li>
                                        <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Nilai Harian</a></li>
                                        <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Daftar Asisten</a></li>
                                        <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">Modul & Jobsheet</a></li>
                                    </ul>
                                </div>

                                <div class="parrent media-body">
                                    <div class="tab-content">
                                        <div class="tab-pane" id="tab1" align="center">
                                            <button type="button" class="btn btn-default" style="margin-bottom: 2%;" onclick="asisten_req()"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
                                            <div id="req_asisten" align="center"></div>
                                        </div>

                                        <div class="tab-pane active in" id="tab2">
                                            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" id="tabel2"
                                                   width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            NRP
                                                        </th>
                                                        <th>
                                                            Nama
                                                        </th>
                                                        <th>
                                                            Kelas
                                                        </th>
                                                        <th>
                                                            NH*
                                                        </th>
                                                        <th>
                                                            UTS
                                                        </th>
                                                        <th>
                                                            UAS
                                                        </th>
                                                        <th>
                                                            Project
                                                        </th>
                                                        <th>
                                                            Absen
                                                        </th>
                                                        <th>
                                                            Nilai
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include './query/tabel_praktikum2.php';
                                                    ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            NRP
                                                        </th>
                                                        <th>
                                                            Nama
                                                        </th>
                                                        <th>
                                                            Kelas
                                                        </th>
                                                        <th>
                                                            NH*
                                                        </th>
                                                        <th>
                                                            UTS
                                                        </th>
                                                        <th>
                                                            UAS
                                                        </th>
                                                        <th>
                                                            Project
                                                        </th>
                                                        <th>
                                                            Absen
                                                        </th>
                                                        <th>
                                                            Nilai
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <p>(* NH = Nilai Harian)</p>
                                        </div>

                                        <div class="tab-pane" id="tab3">
                                            <form class="form-inline" role="form" align="center">
                                                <div class="form-group">
                                                    <input type="text" class="form-control nrp" id="nrp" placeholder="NRP Peserta">
                                                    <input type="hidden" id="periode" value="<?php if(isset($_GET['periode'])){echo $_GET['periode'];} ?>">
                                                    <input type="hidden" id="praktikum" value="<?php if(isset($_GET['kategori'])){echo $_GET['kategori'];} ?>">
                                                </div>
                                                <button type="button" class="btn btn-default" name="users" onclick="showNilai(nrp.value, periode.value, praktikum.value)">Lihat</button>
                                            </form>
                                            <br>
                                            <div id="mahasiswa"></div>
                                            <div id="live_data" align="center"><b>Masukkan NRP peserta untuk melihat detail nilai...</b></div>
                                        </div>

                                        <div class="tab-pane" id="tab4">
                                            <div id="data_koor" align="center"></div>
                                            <div id="data_asisten" align="center"></div>
                                        </div>

                                        <div class="tab-pane" id="tab5">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                        </div>
                                    </div> <!--/.tab-content-->  
                                </div> <!--/.media-body--> 
                            </div> <!--/.media-->     
                        </div><!--/.tab-wrap-->               
                    </div><!--/.col-sm-6-->
                </div>
            </div>
        </section>  <!--/gmap_area -->

        <footer id="footer" class="midnight-blue">
            <?php include './comp/footer.php'; ?>
        </footer><!--/#footer-->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery-1.12.3.js"></script>
        <script src="datatable/media/js/jquery.dataTables.min.js"></script>
        <script src="datatable/media/js/dataTables.bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#tabel1').DataTable();
                $('#tabel2').DataTable();
                asisten_data();
                asisten_req();
                koor_data();
            });
            function asisten_data() {
                var periode = document.getElementById("periode").value;
                var praktikum = document.getElementById("praktikum").value;
                $.ajax({
                    url: "query/asistendata_select.php",
                    method: "POST",
                    data: {periode: periode, praktikum: praktikum},
                    dataType: "text",
                    success: function (data) {
                        $('#data_asisten').html(data);
                    }
                });
            }

            function asisten_req() {
                var periode = document.getElementById("periode").value;
                var praktikum = document.getElementById("praktikum").value;
                $.ajax({
                    url: "query/asistenreq_select.php",
                    method: "POST",
                    data: {periode: periode, praktikum: praktikum},
                    dataType: "text",
                    success: function (data) {
                        $('#req_asisten').html(data);
                    }
                });
            }

            function koor_data() {
                var periode = document.getElementById("periode").value;
                var praktikum = document.getElementById("praktikum").value;
                $.ajax({
                    url: "query/asistenkoor_select.php",
                    method: "POST",
                    data: {periode: periode, praktikum: praktikum},
                    dataType: "text",
                    success: function (data) {
                        $('#data_koor').html(data);
                    }
                });
            }

            

            function showNilai(nrp) {
                if (nrp == "") {
                    document.getElementById("live_data").innerHTML = "<b>Masukkan NRP peserta untuk melihat detail nilai...</b>";
                    return;
                } else {
                    $.ajax({
                        url: "query/nh_select.php",
                        method: "POST",
                        data: {nrp: nrp, periode: periode, praktikum: praktikum},
                        dataType: "text",
                        success: function (data) {
                            $('#live_data').html(data);
                        }
                    });
                }
            }
            
            function update_koor(nrp, periode, praktikum) {
                var periode = document.getElementById("periode").value;
                var praktikum = document.getElementById("praktikum").value;        
                if (nrp == "") {
                    return;
                } else {
                    $.ajax({
                        url: "query/asistenkoor_insert.php",
                        method: "POST",
                        data: {nrp: nrp, periode: periode, praktikum: praktikum},
                        dataType: "text",
                        success: function (data) {
                            //$('#data_koor').html(data);
                            alert(data);
                            koor_data();
                        }
                    });
                }
            }

            $(document).on('click', '#btn_add', function () {
                var pertemuan = $('#pertemuan').text();
                var nrp = document.getElementById("nrp").value;
                var tp = $('#tp').text();
                var th = $('#th').text();
                var ta = $('#ta').text();
                var periode = document.getElementById("periode").value;
                var praktikum = document.getElementById("praktikum").value;
                if (pertemuan == '') {
                    alert("Masukkan Pertemuan Terlebih Dahulu");
                    return false;
                }
                if (tp == '') {
                    alert("Masukkan Nilai TP Terlebih Dahulu");
                    return false;
                }
                if (th == '') {
                    alert("Masukkan Nilai TH Terlebih Dahulu");
                    return false;
                }
                if (ta == '') {
                    alert("Masukkan Nilai TA Terlebih Dahulu");
                    return false;
                }
                $.ajax({
                    url: "query/nh_insert.php",
                    method: "POST",
                    data: {pertemuan: pertemuan, tp: tp, th: th, ta: ta, periode: periode, praktikum: praktikum, nrp: nrp},
                    dataType: "text",
                    success: function (data)
                    {
                        alert(data);
                        showNilai(nrp, periode, praktikum);
                    }
                })
            });

            $(document).on('click', '#btn_delete', function () {
                var id = $(this).data("id5");
                var nrp = document.getElementById("nrp").value;
                var periode = document.getElementById("periode").value;
                var praktikum = document.getElementById("praktikum").value;
                if (confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url: "query/nh_delete.php",
                        method: "POST",
                        data: {id: id},
                        dataType: "text",
                        success: function (data) {
                            alert(data);
                            showNilai(nrp, periode, praktikum);
                        }
                    });
                }
            });

            $(document).on('click', '#btn_delete2', function () {
                var nrp = $(this).data("id3");
                var periode = document.getElementById("periode").value;
                var praktikum = document.getElementById("praktikum").value;
                if (confirm("Apakah ada yakin ingin menghapus ?"))
                {
                    $.ajax({
                        url: "query/asistendata_delete.php",
                        method: "POST",
                        data: {periode: periode, praktikum: praktikum, nrp: nrp},
                        dataType: "text",
                        success: function (data) {
                            alert(data);
                            asisten_data();
                            asisten_req();
                        }
                    });
                }
            });

            $(document).on('click', '#btn_delete3', function () {
                var nrp = $(this).data("id3");
                var periode = document.getElementById("periode").value;
                var praktikum = document.getElementById("praktikum").value;
                if (confirm("Apakah anda yakin ingin menghapus dari Request Asisten?"))
                {
                    $.ajax({
                        url: "query/asistenreq_delete.php",
                        method: "POST",
                        data: {periode: periode, praktikum: praktikum, nrp: nrp},
                        dataType: "text",
                        success: function (data) {
                            alert(data);
                            asisten_req();
                            asisten_data();
                        }
                    });
                }
            });

            $(document).on('click', '#btn_delete4', function () {
                var nrp = $(this).data("id1");
                var periode = document.getElementById("periode").value;
                var praktikum = document.getElementById("praktikum").value;
                if (confirm("Apakah anda yakin ingin menghapus dari Koordinator Asisten ?"))
                {
                    $.ajax({
                        url: "query/asistenkoor_delete.php",
                        method: "POST",
                        data: {periode: periode, praktikum: praktikum, nrp: nrp},
                        dataType: "text",
                        success: function (data) {
                            alert(data);
                            koor_data();
                        }
                    });
                }
            });

            $(document).on('click', '#btn_update3', function () {
                var nrp = $(this).data("id3");
                var periode = document.getElementById("periode").value;
                var praktikum = document.getElementById("praktikum").value;
                if (confirm("Apakah anda yakin ?"))
                {
                    $.ajax({
                        url: "query/asistenreq_update.php",
                        method: "POST",
                        data: {periode: periode, praktikum: praktikum, nrp: nrp},
                        dataType: "text",
                        success: function (data) {
                            alert(data);
                            asisten_req();
                            asisten_data();
                        }
                    });
                }
            });
            
            $(document).on('click', '#btn_update4', function () {
                var nrp = $(this).data("id3");
                var periode = document.getElementById("periode").value;
                var praktikum = document.getElementById("praktikum").value;
                if (confirm("Apakah anda yakin ?"))
                {
                    $.ajax({
                        url: "query/asistenreq_update.php",
                        method: "POST",
                        data: {periode: periode, praktikum: praktikum, nrp: nrp},
                        dataType: "text",
                        success: function (data) {
                            alert(data);
                            asisten_req();
                            asisten_data();
                        }
                    });
                }
            });

            function edit_data(id, text, column_name) {
                $.ajax({
                    url: "query/nh_update.php",
                    method: "POST",
                    data: {id: id, text: text, column_name: column_name},
                    dataType: "text",
                    success: function (data) {
                        alert(data);
                    }
                });
            }
            $(document).on('blur', '.pertemuan', function () {
                var id = $(this).data("id1");
                var pertemuan = $(this).text();
                edit_data(id, pertemuan, "pertemuan");
            });
            $(document).on('blur', '.tp', function () {
                var id = $(this).data("id2");
                var tp = $(this).text();
                edit_data(id, tp, "tp");
            });
            $(document).on('blur', '.th', function () {
                var id = $(this).data("id3");
                var th = $(this).text();
                edit_data(id, th, "th");
            });
            $(document).on('blur', '.ta', function () {
                var id = $(this).data("id4");
                var th = $(this).text();
                edit_data(id, th, "th");
            });
        </script>
    </body>
</html
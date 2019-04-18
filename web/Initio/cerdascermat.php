<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title>Inter High School Accounting Olympiad - Politeknik Caltex Riau</title>

    <link rel="icon" type="images/png" href="assets/images/icon.png">

    <!-- Bootstrap -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
    <!-- Icon font -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body>
    <?php
    include "koneksi.php";
    ?>

    <?php
    $query = mysqli_query($con, "SELECT * FROM info_lomba where id_info = 1 ");
    $i = mysqli_fetch_array($query)
    ?>

    <header id="header">
        <div id="head3">
            <h1 id="logo" class="text-center">
                <span class="title">INFORMASI CABANG LOMBA</span>
            </h1>

        </div>

        <nav class="navbar navbar-default navbar-sticky">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>

                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="informasi.php">About</a></li>
                        <li><a href="list-peserta.php">Peserta</a></li>
                        <li><a href="pendaftaran.php">Pendaftaran</a></li>
                    </ul>

                </div><!--/.nav-collapse -->            
            </div>  
        </nav>
    </header>

    <main id="main">

        <div class="container">
            <h2 class="section-title2"><span>CERDAS CERMAT</span></h2>
            <div class="row section topspace">
                <div class="col-md-12">
                 <p class="lead text-center"><?php print $i['informasi_lomba']; ?></p>
             </div>
         </div> 
         <hr class="hr-style1">

         <!-- OPSI 1 -->
         <h2 class="section-title3"><span class="glyphicon glyphicon-cog" style="font-size:20px; color:#eac338"></span> Peraturan Perlombaan CC</h2>
         <hr class="hr-style2"></hr>

         <table>
            <?php 
            $query = mysqli_query($con, "SELECT p_lomba FROM peraturan_lomba where id_info = 1 order by id_peraturan");
            while($p = mysqli_fetch_array($query)){
                ?>
                <tr><th><span class="glyphicon glyphicon-pencil" style="font-size:12px; color:#292929"></span></th><th><?php print $p['p_lomba'];?></th></tr>
                <?php } ?>
         </table>
            <!-- OPSI 2 -->
            <h2 class="section-title3"><span class="glyphicon glyphicon-list-alt" style="font-size:20px; color:#eac338"></span> CC Soal Wajib (Kisi-Kisi)</h2>
            <hr class="hr-style3"></hr>
            <table>
             <?php 
             $query = mysqli_query($con, "SELECT k_lomba FROM kisi_lomba where id_info = 1 order by id_kisi");
             while($k = mysqli_fetch_array($query)){
                ?>
                <tr><th><span class="glyphicon glyphicon-ok" style="font-size:12px; color:#292929"></span></th><th><?php print $k['k_lomba'];?></th></tr>
                <?php } ?>
            </table>

            <br><br><br>

            <?php
            if(isset($_SESSION['login_user'])){
                ?>
                <br/>
                <br/>
                <center>
                    <a href="editlomba.php?id_lomba=<?php print $m['id_lomba']; ?>"><button style="width:100px; padding:5px 5px 0px 5px;">Edit</a>
                        <a href="hapuslomba.php?id_lomba=<?php print $m['id_lomba']; ?>"><button style="width:100px; padding:5px 5px 0px 5px;">Hapus</a>
                        </center>
                        <?php } ?>

                    </div>

                </main>

                <footer id="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 widget">
                                <h3 class="widget-title">KONTAK</h3>
                                <div class="widget-body">
                                    <p>+085278037498<br>
                                        <span class="glyphicon glyphicon-envelope"> <br></span><a href="mailto:ihsao@pcr.ac.id">ihsao@pcr.ac.id</a><br>
                                    </p>    
                                </div>
                            </div>

                            <div class="col-md-3 widget">
                                <h3 class="widget-title">Social Media</h3>
                                <div class="widget-body">
                                    <p class="follow-me-icons">
                                        <a href="https://www.instagram.com/ihsao2019/"><i class="fa fa-instagram fa-2"></i></a>
                                    </p>
                                    <a href="https://www.instagram.com/ihsao2019/"><p>ihsao2019</p>
                                    </div>
                                </div>

                                <div class="col-md-3 widget">
                                    <h3 class="widget-title">Informasi</h3>
                                    <div class="widget-body">
                                        <a href=""><p>Pendaftaran</p>
                                        </div>
                                    </div>

                                    <div class="col-md-3 widget">
                                        <h3 class="widget-title">Lokasi</h3>
                                        <div class="widget-body">
                                            <a href="https://goo.gl/maps/AJd4c9cBbZT2">Politeknik Caltex Riau</a><br>
                                            <br>
                                        </p>    
                                    </div>
                                </div>

                            </div> <!-- /row of widgets -->
                        </div>
                    </footer>

                    <footer id="underfooter">
                        <div class="container">
                            <div class="row">

                                <div class="col-md-6 widget">
                                    <div class="widget-body">
                                    </div>
                                </div>

                                <div class="col-md-6 widget">
                                    <div class="widget-body">
                                        <p class="text-right">
                                            &copy; IHSAO 2019 - Politeknik Caltex Riau by CloudTeamID<br> 
                                        </div>
                                    </div>

                                </div> <!-- /row of widgets -->
                            </div>
                        </footer>



                        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
                        <script src="assets/js/template.js"></script>
                    </body>
                    </html>

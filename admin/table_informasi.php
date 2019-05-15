<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" href="images/Icon.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin IHSAO</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <?php
    include "koneksi.php";
    // mengaktifkan session
    session_start();
    echo $_SESSION['admin'];
    // cek apakah user telah login, jika belum login maka di alihkan ke halaman login
    if($_SESSION['admin'] !="admin"){
    	echo "<script> location.href='login.php'; </script>"; 
    }
    ?>
    
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">

              <a href="index.php" class="site_title"><span>Admin IHSAO</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i>Dashboard</a></li></a>
                  </li>
                  <!--<li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>-->
                  <!--  <ul class="nav child_menu">-->
                  <!--    <li><a href="form_peserta.php">Form Edit Peserta</a></li>-->
                  <!--    <li><a href="form_beranda.php">Form Beranda</a></li>-->
                  <!--    <li><a href="form_informasi.php">Form Informasi</a></li>-->
                  <!--    <li><a href="form_pendaftaran.php">Form Pendaftaran</a></li>-->
                  <!--    <li><a href="form_status.php">Form Status</a></li>-->

                  <!--  </ul>-->
                  <!--</li>-->
                  <li><a href="table_informasi.php"><i class="fa fa-table"></i> Daftar Peserta </a>
                    <!--<ul class="nav child_menu">-->
                    <!--  <li><a href="table_beranda.php">Table Content Beranda</a></li>-->
                    <!--  <li><a href="table_informasi.php">Table Content Informasi</a></li>-->
                    <!--  <li><a href="table_pendaftaran.php">Table Content Pendaftaran</a></li>-->
                    <!--  <li><a href="table_status.php">Table Content Status</a></li>-->
                    <!--</ul>-->
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Profile</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Lengkap Pendaftar</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered" align="center">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Id Peserta</th>
                          <th style="width: 20%">Nama Sekolah</th>
                          <th>Alamat Sekolah</th>
                          <th>No Telp Sekolah</th>
                          <th>Nama Pembimbing</th>
                          <th>NIP</th>
                          <th>No Telp Pembimbing</th>
                          <th>Cabang Lomba</th>
                          <th>Asal Sekolah</th>
                          <th>Nama Calon Peserta (1)</th>
                          <th>Kelas (1)</th>
                          <th>Alamat (1)</th>
                          <th>No HP (1)</th>
                          <th>Nama Calon Peserta (2)</th>
                          <th>Kelas (2)</th>
                          <th>Alamat (2)</th>
                          <th>No HP (2)</th>
                          <th>Nama Calon Peserta (3)</th>
                          <th>Kelas (3)</th>
                          <th>Alamat (3)</th>
                          <th>No HP (3)</th>
                        </tr>
                      </thead>

                    
                      <tbody>
                        <?php 
                        $query = mysqli_query($con, "SELECT * FROM pendaftaran where status='Verified' order by id_peserta");
                        $a = 0;
                        while( $i = mysqli_fetch_array($query)){
                        $a++;
                        ?>
                        <tr>
                          <td><?php print $a; ?></td>
                          <td><?php print $i['kode']; ?></td>
                          <td><?php print $i['nama_sekolah']; ?></td>
                          <td><?php print $i['alamat_sekolah']; ?></td>
                          <td><?php print $i['no_telp_sekolah']; ?></td>
                          <td><?php print $i['nama_pembimbing']; ?></td>
                          <td><?php print $i['nip_pembimbing']; ?></td>
                          <td><?php print $i['no_telp_pembimbing']; ?></td>
                          <td><?php print $i['jenis_lomba']; ?></td>
                          <td><?php print $i['asal_daerah']; ?></td>
                          <td><?php print $i['nama_calon_peserta1']; ?></td>
                          <td><?php print $i['kelas_calon_peserta1']; ?></td>
                          <td><?php print $i['alamat_calon_peserta1']; ?></td>
                          <td><?php print $i['nohp_calon_peserta1']; ?></td>
                          <td><?php print $i['nama_calon_peserta2']; ?></td>
                          <td><?php print $i['kelas_calon_peserta2']; ?></td>
                          <td><?php print $i['alamat_calon_peserta2']; ?></td>
                          <td><?php print $i['nohp_calon_peserta2']; ?></td>
                          <td><?php print $i['nama_calon_peserta3']; ?></td>
                          <td><?php print $i['kelas_calon_peserta3']; ?></td>
                          <td><?php print $i['alamat_calon_peserta3']; ?></td>
                          <td><?php print $i['nohp_calon_peserta3']; ?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <br/><br/>
                  </div>
                  
                  <div class="x_title">
                    <h2>Data Lengkap Pendaftar</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered" align="center">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Kode Peserta</th>
                          <th style="width: 20%">File Gambar</th>
                      </thead>

                    
                      <tbody>
                        <?php 
                        $query = mysqli_query($con, "SELECT * FROM tb_gambar order by id_gambar");
                        $a = 0;
                        while( $i = mysqli_fetch_array($query)){
                        $a++;
                        ?>
                        <tr>
                          <td><?php print $a; ?></td>
                          <td><?php print $i['kode_gambar']; ?></td>
                          <td><img src="'.$i->file.'" alt="'.$i->id_gambar.'" title="'.$i->kode_gambar.'" width="100" /></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

                <!--  </div>-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            &copy; IHSAO 2019 - Politeknik Caltex Riau by CloudTeamID
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
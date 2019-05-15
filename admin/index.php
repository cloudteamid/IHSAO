<?php
    session_start();
    include "koneksi.php";
    if ($_SESSION['admin'] !="admin"){
        // echo $_SESSION['admin'];
    	echo "<script> location.href='login.php'; </script>"; 
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" href="images/Icon.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    

    <title>Admin | IHSAO 2019</title>
    
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
      
   
    
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
        <?php 
        $query = mysqli_query($con, "SELECT COUNT(id_peserta) as total FROM pendaftaran");
        $z = mysqli_fetch_assoc($query);
        ?>
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count"><?php print $z['total']; ?></div>
                  <h3>Total Peserta</h3>
                  <p>&nbsp</p>
                </div>
              </div>
               <?php 
        $query = mysqli_query($con, "SELECT COUNT(id_peserta) as total FROM pendaftaran where status = 'Verified'");
        $x = mysqli_fetch_assoc($query);
        ?>
        
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count"><?php print $x['total']; ?></div>
                  <h3>Sudah Verifikasi</h3>
                  <p>&nbsp</p>
                </div>
              </div>
              <?php 
        $query = mysqli_query($con, "SELECT COUNT(id_peserta) as total FROM pendaftaran where status = 'Unverified'");
        $c = mysqli_fetch_assoc($query);
        ?>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count"><?php print $c['total']; ?></div>
                  <h3>Belum Verifikasi</h3>
                  <p>&nbsp</p>
                </div>
              </div>
              
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Peserta Belum Verifikasi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start project list -->
                    <form action="form_peserta.php" method="POST">
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th style="width: 20%">Nama Sekolah</th>
                          <th style="width: 15%">ID Peserta</th>
                          <th>Alamat Sekolah</th>
                          <th>Cabang Lomba</th>
                          <th>Status</th>
                          <th style="width: 20%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $query = mysqli_query($con, "SELECT * FROM pendaftaran where status = 'Unverified' order by jenis_lomba");
                        $a = 0;
                        while( $i = mysqli_fetch_array($query)){
                        $a++;
                        ?>
                        <tr>
                          <td><?php print $a; ?></td>
                          <td>
                            <a><?php print $i['nama_sekolah']; ?></a>
                          </td>
                          <td>
                            <a><?php print $i['kode']; ?></a>
                          </td>
                          <td>
                            <a><?php print $i['alamat_sekolah']; ?></a>
                          </td>
                          <td>
                            <a><?php print $i['jenis_lomba']; ?></a>
                          </td>
                          <td>
                            <button type="button" class="btn btn-dark btn-xs">Unverified</button>
                          </td>
                          <td>
                            <a href="form_peserta.php?id_peserta=<?php print $i['id_peserta'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="form_hapus.php?id_peserta=<?php print $i['id_peserta'];?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    </form>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Peserta Sudah Verifikasi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start project list -->
                    <form action="form_peserta.php" method="POST">
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th style="width: 20%">Nama Sekolah</th>
                          <th style="width: 15%">ID Peserta</th>
                          <th>Alamat Sekolah</th>
                          <th>Cabang Lomba</th>
                          <th>Status</th>
                          <th style="width: 20%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $query = mysqli_query($con, "SELECT * FROM pendaftaran where status = 'Verified' order by jenis_lomba");
                        $b = 0;
                        while( $j = mysqli_fetch_array($query)){
                        $b++;
                        ?>
                        <tr>
                          <td><?php print $b; ?></td>
                          <td>
                            <a><?php print $j['nama_sekolah']; ?></a>
                          </td>
                          <td>
                            <a><?php print $j['kode']; ?></a>
                          </td>
                          <td>
                            <a><?php print $j['alamat_sekolah']; ?></a>
                          </td>
                          <td>
                            <a><?php print $j['jenis_lomba']; ?></a>
                          </td>
                          <td>
                            <button type="button" class="btn btn-primary btn-xs">Verified</button>
                          </td>
                          <td>
                            <a href="form_peserta.php?id_peserta=<?php print $j['id_peserta'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="form_hapus.php?id_peserta=<?php print $j['id_peserta'];?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    </form>
                            
                         
                    <!-- end project list -->

                  </div>
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
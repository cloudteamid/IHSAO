<?php
    include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	<link rel="icon" type="images/png" href="assets/images/icon2.png">
	<title>Inter High School Accounting Olympiad - Politeknik Caltex Riau</title>
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">
	<!-- Ionic Icon -->
	<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">
	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">

<header id="header">
	<div id="head2" class="parallax" parallax-speed="2">

		<h1 id="logo" class="text-center">
			<img class="img-circle" src="assets/images/guy.jpg" alt="">
			<span class="title">BUKTI PEMBAYARAN</span>
			<span class="tagline">Life is like an accounting, happiness credits and sorrows always debits<br></span> 
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
					<li><a href="informasi.php">Informasi</a></li>
					<li  class="active"><a href="list-peserta.php">Peserta</a></li>
					<li><a href="pendaftaran.php">Pendaftaran</a></li>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
    <h2 class="section-title2"><span>Upload Bukti Pembayaran</span></h2>
		<div class="row section topspace">
			<div class="col-md-12">
				<p class="lead text-center">Masukkan ID Team dan Bukti Pembayaran melalui form dibawah.<br>
				<b>Catatan : </b>Jika melakukan pembayaran lebih dari 1 Team. Maka masukkan ID Team Seperti dibawah ini,<br>
				<b>IDTeam1 - IDTeam2 - IDTeam3</b></p>
			</div>
		</div> 
		<hr class="hr-style1"><br>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
            <tr>
                <td>Kode Team</td>
                <td>:</td>
                <td><input class="form-listpeserta" type="text" name="nama"/></td>
            </tr>
            <tr>
                <td>File</td>
                <td>:</td>
                <td><input type="file" name="gambar"/></td>
            </tr>
             <tr>
                <td></td>
                <td></td>
                <td><input class="tombolcek-listpeserta" type="submit" name="kirim" value="kirim" /></td>
            </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['kirim'])){
            $nama = $_POST['nama'];
            $nama_file = $_FILES['gambar']['name'];
            $source = $_FILES['gambar']['tmp_name'];
            $folder = './pembayaran/';
            
            move_uploaded_file($source, $folder.$nama_file);
            $insert = mysqli_query($conn, "INSERT INTO tb_gambar VALUES (
            NULL,
            '$nama',
            '$nama_file')");
            
            if($insert){
                echo 'Berhasil upload!';
            }else{
                echo 'Tidak Berhasil upload';
            }
        }
        ?>
    </body>
</html>
	</div>	<!-- /container -->
	
</main>
<br>
<br>
<br>
<footer id="footer">
	<div class="container2">
		<div class="row">
			<div class="col-md-3 widget">
				<center><h3 class="widget-title">Tentang Kami</h3><center>
					<img class="img-footer"  src="assets/images/footer-logo.jpg" alt="">
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title">Social Media</h3>
					<div class="widget-title">
						<center>
							<button type="button" class="social-media-button icon ion-logo-instagram"><a class="a-sosmed" href="https://www.instagram.com/ihsao2019/">Instagram</a></button>
							<button type="button" class="social-media-button icon ion-logo-whatsapp"><a  class="a-sosmed" href="https://api.whatsapp.com/send?phone=6281266209947&">Whatsapp</a></button>
							<button type="button" class="social-media-button icon ion-md-mail"><a  class="a-sosmed" href="mailto:viviprilya@gmail.com?subject=Saya ingin bertanya..." title="Send Email">Email</a></button>
						</center>
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title">Informasi</h3>
					<div class="widget-body-kontak">
						<a href="https://goo.gl/maps/AJd4c9cBbZT2">Politeknik Caltex Riau</a><br>
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title">Kontak Panitia</h3>
					<div class="widget-body-kontak">
						0852-7803-7498 - VIVI PRILIA <br> 0812-6620-9947 - RENDI MAULANA
						
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
<script src="http://netdna.bootstrapootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>

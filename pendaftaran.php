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

<?php
    include 'koneksi.php';
?>

<header id="header">
	<div id="head2" class="parallax" parallax-speed="2">

		<h1 id="logo" class="text-center">
			<img class="img-circle" src="assets/images/guy.jpg" alt="">
			<span class="title">PENDAFTARAN</span>
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
					<li><a href="list-peserta.php">Peserta</a></li>
					<li  class="active"><a href="pendaftaran.php">Pendaftaran</a></li>
			
			</div><!--/.nav-collapse -->			
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container-pendaftaran">
		<h2 class="section-title2"><span>Formulir Registrasi</span></h2>
		<hr class="hr-style1">
		<!-- Form Pendaftaran Umum -->
		<form action="" method="post" enctype="multipart/form-data">
		<table class="table-pendaftaran">
			<tr>
				<th class="table-pendaftaran-siswa2">Data Sekolah</th>
				<th class="table-pendaftaran-siswa2">Data Pembimbing</th>
				<th class="table-pendaftaran-siswa2">Cabang Lomba</th>
		    </tr>
			<tr>
				<th class="table-pendaftaran-isi"><input type="text" class="form-atur" placeholder="Nama Sekolah" name="nama_sekolah" required></th>
				<th class="table-pendaftaran-isi"><input type="text" class="form-atur" placeholder="Nama Pembimbing" name="nama_pembimbing" required></th>
				<th class="table-pendaftaran-isi"><select name="jenis_lomba" id="" class="form-atur-combobox" required>
													<option value="c0" class="cb-v">--Silahkan Pilih Perlombaan</option>
													<option value="Cerdas Cermat" class="cb-v">Cerdas Cermat</option>
													<option value="Olimpiade" class="cb-v">Olimpiade</option>
													<option value="Myob" class="cb-v">Myob</option>
													<option value="Debat" class="cb-v">Debat</option>
													<option value="Karya Ilmiah" class="cb-v">Karya Ilmiah</option>
											      </select>
	            </th>
		    </tr>
			<tr>
				<th class="table-pendaftaran-isi"><input type="text" class="form-atur" placeholder="Alamat Sekolah" name="alamat_sekolah" required ></th>
				<th class="table-pendaftaran-isi"><input type="text" class="form-atur" placeholder="NIP" name="nip_pembimbing" required></th>
				<th class="table-pendaftaran-isi"><select name="asal_daerah" id="" class="form-atur-combobox" required>
													<option value="c0" class="cb-v">--Silahkan Pilih Daerah</option>
													<option value="Aceh" class="cb-v">Aceh</option>
													<option value="Riau" class="cb-v">Riau</option>
													<option value="Kepulauan Riau" class="cb-v">Kepulauan Riau</option>
													<option value="Jambi" class="cb-v">Jambi</option>
													<option value="Lampung" class="cb-v">Lampung</option>
													<option value="Kepulauan Bangka Belitung" class="cb-v">Kepulauan Bangka Belitung</option>
													<option value="Sumatera Utara" class="cb-v">Sumatera Utara</option>
													<option value="Sumatra Barat" class="cb-v">Sumatra Barat</option>
													<option value="Sumatra Selatan" class="cb-v">Sumatra Selatan</option>
													<option value="Bengkulu" class="cb-v">Bengkulu</option>
											      </select>
	            </th>
		    </tr>
			<tr>
				<th class="table-pendaftaran-isi"><input type="text" class="form-atur" placeholder="No Telp Sekolah" name=no_telp_sekolah required ></th>
				<th class="table-pendaftaran-isi"><input type="text" class="form-atur" placeholder="No Telp Pembimbing" name="no_telp_pembimbing" required></th>
				<th class="table-pendaftaran-isi"></th>
		    </tr>
		</table>
		<br><br>
		<!-- Form Pendaftaran Siswa -->
		<table>
			<tr>
				<th class="table-pendaftaran-siswa2">Biodata Peserta 1</th>
				<th class="table-pendaftaran-siswa2">Biodata Peserta 2</th>
				<th class="table-pendaftaran-siswa2">Biodata Peserta 3</th>
			</tr>
			<tr>
				<th class="table-pendaftaran-siswa"> Nama Calon Peserta<br><input type="text" class="form-atur-2" placeholder="Ketik Disini.." name="nama_calon_peserta1" required></th>
				<th class="table-pendaftaran-siswa"> Nama Calon Peserta<br><input type="text" class="form-atur-2" placeholder="Ketik Disini.." name="nama_calon_peserta2" required></th>
				<th class="table-pendaftaran-siswa"> Nama Calon Peserta<br><input type="text" class="form-atur-2" placeholder="Ketik Disini.." name="nama_calon_peserta3" required></th>
			</tr>
			<tr>
				<th class="table-pendaftaran-siswa"> Kelas<br><input type="text" class="form-atur-2" placeholder="Ketik Disini.." name="kelas_calon_peserta1" required></th>
				<th class="table-pendaftaran-siswa"> Kelas<br><input type="text" class="form-atur-2" placeholder="Ketik Disini.." name="kelas_calon_peserta2" required></th>
				<th class="table-pendaftaran-siswa"> Kelas<br><input type="text" class="form-atur-2" placeholder="Ketik Disini.." name="kelas_calon_peserta3" required></th>
			</tr>
			<tr>
				<th class="table-pendaftaran-siswa"> Alamat<br><input type="text" class="form-atur-2" placeholder="Ketik Disini.." name="alamat_calon_peserta1" required></th>
				<th class="table-pendaftaran-siswa"> Alamat<br><input type="text" class="form-atur-2" placeholder="Ketik Disini.."  name="alamat_calon_peserta2" required></th>
				<th class="table-pendaftaran-siswa"> Alamat<br><input type="text" class="form-atur-2" placeholder="Ketik Disini.." name="alamat_calon_peserta3" required></th>
			</tr>
			<tr>
				<th class="table-pendaftaran-siswa"> No Hp<br><input type="text" class="form-atur-2" placeholder="Ketik Disini.." name="nohp_calon_peserta1" required></th>
				<th class="table-pendaftaran-siswa"> No Hp<br><input type="text" class="form-atur-2" placeholder="Ketik Disini.." name="nohp_calon_peserta2" required></th>
				<th class="table-pendaftaran-siswa"> No Hp<br><input type="text" class="form-atur-2" placeholder="Ketik Disini.." name="nohp_calon_peserta3" required></th>
			</tr>
			<tr>
				<th class="table-pendaftaran-siswa"></th>
				<th class="table-pendaftaran-siswa"></th>
				<th class="table-pendaftaran-siswa"><button class="button-daftar" data-text="Daftar" name="daftar">DAFTAR</button></th>
			</tr>
		</table>
		</form>
		<br>
		<hr class="hr-style2"><br>
		<table class="table-booklet">
		    <tr>
		        <th class="col-md-12"><p class="lead text-center">Formulir Pendaftaran Offline, Dapat di Download Disini
		        <a class="link-booklet" href="https://drive.google.com/file/d/1CwT0XSC1C0P5gsu123YmDTbEFsc41kDP/view?usp=sharing">Formulir Registrasi Offline</a></p></th>
		    </tr>
		</table>
		<hr class="hr-style2">
		<br><br>
	</div>

</main>

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

<?php
        if(isset($_POST['daftar'])){
            $nama_sekolah = $_POST['nama_sekolah'];
            $alamat_sekolah = $_POST['alamat_sekolah'];
            $no_telp_sekolah = $_POST['no_telp_sekolah'];
            $nama_pembimbing = $_POST['nama_pembimbing'];
            $nip_pembimbing = $_POST['nip_pembimbing'];
            $no_telp_pembimbing = $_POST['no_telp_pembimbing'];
            $jenis_lomba = $_POST['jenis_lomba'];
            $asal_daerah = $_POST['asal_daerah'];
            $nama_calon_peserta1 = $_POST['nama_calon_peserta1'];
            $kelas_calon_peserta1 = $_POST['kelas_calon_peserta1'];
            $alamat_calon_peserta1 = $_POST['alamat_calon_peserta1'];
            $nohp_calon_peserta1 = $_POST['nohp_calon_peserta1'];
            $nama_calon_peserta2 = $_POST['nama_calon_peserta2'];
            $kelas_calon_peserta2 = $_POST['kelas_calon_peserta2'];
            $alamat_calon_peserta2 = $_POST['alamat_calon_peserta2'];
            $nohp_calon_peserta2 = $_POST['nohp_calon_peserta2'];
            $nama_calon_peserta3 = $_POST['nama_calon_peserta3'];
            $kelas_calon_peserta3 = $_POST['kelas_calon_peserta3'];
            $alamat_calon_peserta3 = $_POST['alamat_calon_peserta3'];
            $nohp_calon_peserta3 = $_POST['nohp_calon_peserta3'];
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $kode = substr(str_shuffle($permitted_chars), 0, 10);
            $status = 'Unverified';
            
            
    
            function generate_string($input, $strength = 16) {
                $input_length = strlen($input);
                $random_string = '';
                for($i = 0; $i < $strength; $i++) {
                    $random_character = $input[mt_rand(0, $input_length - 1)];
                    $random_string .= $random_character;
                }
                return $random_string;
            }
            
            function randomPassword() {
            $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
                for ($i = 0; $i < 8; $i++) {
                $n = rand(0, count($alphabet)-1);
                $pass[$i] = $alphabet[$n];
                }
                return $pass;
            }
            
            $insert = mysqli_query($con, "INSERT INTO pendaftaran VALUES (
            NULL,
            '$nama_sekolah', '$alamat_sekolah', '$no_telp_sekolah', '$nama_pembimbing', '$nip_pembimbing', '$no_telp_pembimbing', 
            '$jenis_lomba', '$asal_daerah', '$nama_calon_peserta1', '$kelas_calon_peserta1', '$alamat_calon_peserta1', '$nohp_calon_peserta1', 
            '$nama_calon_peserta2', '$kelas_calon_peserta2', '$alamat_calon_peserta2', '$nohp_calon_peserta2', '$nama_calon_peserta3', '$kelas_calon_peserta3',
            '$alamat_calon_peserta3', '$nohp_calon_peserta3', '$kode', '$status')");
            
            if($insert){
                echo 'Berhasil upload';
            }else{
                echo 'Tidak Berhasil upload';
            }
        }
?>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>

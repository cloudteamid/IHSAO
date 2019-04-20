<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//buat koneksi MySQL untuk user: root, tanpa password, alamat :localhost
$con=mysqli_connect("localhost","root","","ihsao");

//cek apakah koneksi dengan MySQL berhasil
if (mysqli_connect_errno($con))
	{
		echo "koneksi error";
		//koneksi gagal
		mysqli_connect_error();
	}
	else
	{
		//koneksi berhasil
		
	}
?>
</body>
</html>
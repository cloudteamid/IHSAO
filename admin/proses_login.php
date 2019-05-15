<?php


     
       

    include "koneksi.php";
    
    	
    
    	
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($con,"select * from admin where username_admin='$username' and password_admin='$password'");
        
    
    
    
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	session_start();
	$_SESSION['admin']= $data['username_admin'];
	echo "Login Berhasil ";
	echo $_SESSION['admin'];
	   echo "<script> location.href='index.php'; </script>";

}else{
    echo "Login Gagal";
    //   echo "<script> location.href='login.php'; </script>";
}

?>
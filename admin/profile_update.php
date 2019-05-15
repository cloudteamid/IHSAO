<?php

include"koneksi.php";
        
$pass   = $_GET['password'];

// query SQL untuk insert data
$query = "UPDATE admin SET password_admin='$pass'";
mysqli_query($con, $query);
// mengalihkan ke halaman index.php
echo "<script> location.href='index.php';</script>";
?>
<?php

include"koneksi.php";
        
$id   = $_GET['id_peserta'];
$stat  = $_GET['status'];

// query SQL untuk insert data

$query = "UPDATE pendaftaran SET status='$stat' where id_peserta='$id'";
mysqli_query($con, $query);
// mengalihkan ke halaman index.php
echo "<script> location.href='index.php';</script>";
?>
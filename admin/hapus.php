<?php
include"koneksi.php";
        
$id_peserta   = $_GET['id_peserta'];
print $id_peserta;

// query SQL untuk insert data

$query = "DELETE FROM pendaftaran WHERE id_peserta = $id_peserta";
mysqli_query($con, $query);
// mengalihkan ke halaman index.php
echo "<script>location.href='index.php';</script>";
?>
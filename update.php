<?php  
include 'koneksi.php';
$ID       = $_POST['ID'];
$Nama     = $_POST['Nama'];
$Instansi = $_POST['Instansi'];
$Tujuan   = $_POST['Tujuan'];
$Tanggal  = $_POST['Tanggal'];
$Waktu    = $_POST['Waktu'];

mysqli_query($koneksi,"
UPDATE buku_tamu
SET
    Nama='$Nama',
    Instansi='$Instansi',
    Tujuan='$Tujuan',
    Tanggal='$Tanggal',
    Waktu='$Waktu'
WHERE ID='$ID'
");

header("location:index.php");

?>
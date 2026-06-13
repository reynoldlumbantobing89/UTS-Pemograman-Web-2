<?php  
    // koneksi database 
include 'koneksi.php'; 
    // menangkap data yang di kirim dari form 
$Nama = $_POST['Nama'];
$Instansi = $_POST['Instansi']; 
$Tujuan = $_POST['Tujuan']; 
$Tanggal = $_POST['Tanggal']; 
$Waktu = $_POST['Waktu']; 
 
 
// menginput data ke database 

mysqli_query($koneksi,"insert into buku_tamu values('','$Nama','$Instansi','$Tujuan','$Tanggal','$Waktu')"); 

// mengalihkan halaman kembali ke index.php 

header("location:index.php"); 

?>
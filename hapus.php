<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$ID_User = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from user where ID_User='$ID_User'");
 
header("location:tampil.php");
 
?>
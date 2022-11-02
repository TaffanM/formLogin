<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$iduser = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from user where iduser='$iduser'");
 
header("location:tampil.php");
 
?>
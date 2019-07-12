<?php 
//koneksi ke database
//dibuat variabel terlebih dahulu
$server="localhost";
$user="root";
$pass="";
$nama_db="vsga";

$db=mysqli_connect($server, $user, $pass, $nama_db);//harus urutan... 

if (!$db) {
	die("Gagal Terhubung ke database :" . mysqli_connect_error());
}else{
	echo "your is Connected Now";
}

 ?>
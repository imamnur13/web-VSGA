<?php 

$nama = $_POST['Nama'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$usia = $_POST['Usia'];


// if (isset($nama)) {
// 	# code...
// } sama saja digunakan untuk mengecek nama yang kosong
// if (empty($nama)) {
// 	# code...
// } untuk mengecek kolom yang kosong juga

if ($nama=="") {//ini untuk mengembalikan ke file form.php jika nama anda kosong
	header("location:form.php");

}elseif ($alamat=="") {
	header("location:form.php");
}else{
	
	echo "Nama Anda adalah $nama <br/>";
	echo "Alamat Anda adalah ".$alamat;
	echo "<br/>";
	echo "Gender Anda adalah ".$jk;
	echo "<br/>";
	echo "Usia Anda adalah ".$usia;
}



 ?>
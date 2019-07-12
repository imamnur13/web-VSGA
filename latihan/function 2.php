<!DOCTYPE html>
<html>
<head>
	<title>Menggunakan Function</title>
</head>
<body>

<?php 
//membuat fungsi
function perkenalan($nama,$salam){
	echo $salam."<br>";
	echo "Perkenalkan, Nama Saya " . $nama. "<br/>";
	

}


function hitungumur($thn_lahir,$thn_sekarang){
	$umur=$thn_sekarang - $thn_lahir;
	return $umur;

}

function faktorial($angka){
	if($angka < 2){
		return 1;
	}else {

		//memanggil dirinya sendiri
			
		return ($angka * faktorial($angka-1));
	}

}
function hitung($x,$y){
	
	$z = $x * $y;

	return $z;

}


function setenghalingkaran($d){
	$x = $d/2;
	$y = $x * $x;
	$hasil = (3.14 * $y) / 2;

	return $hasil;
}





//memanggil funsi yang telah di buat
perkenalan("Nur","Hai");
echo "Senanag berkanalan dengan anda <br>";
echo "<hr>";

$saya="medi";
$ucapansalam="Selamat Pagi";


//memanggilnya lagi
perkenalan($saya,$ucapansalam)."<br>";
//mmemanggil function kembali

echo "saya berusia".hitungumur(2019,1999)." tahun<br>";
echo "Senanag berkanalan dengan anda <br>";

echo "<hr>";

echo "Fungsi Rekrusif Adalah fungsi yang memanggil dirinya sendiri <br>";
echo "Faktorial 5 adalah ".faktorial(5);

echo "<hr>";

echo "Menghitung Luas Persegi Panjang<br>";
echo "Luas Persegi Panjang dengan panjang 10cm lebar 6.5cm adalah ".hitung(10,6.5)."cm";

echo "<hr>";

echo "Menghitung Luas Setengah lingkaran<br>";
echo "Luas setengah Lingkaran yang berdiameter 10cm adalah ".setenghalingkaran(10)."cm";

 ?>

</body>
</html>



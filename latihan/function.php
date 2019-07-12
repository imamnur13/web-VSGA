<?php 
 // belajar membuat function

function myFunction(){

	echo "Function Pertama <br>";
}

function ttl($tempat, $tahun){

	echo "saya lahir di $tempat, pada Tahun $tahun <br>";

}

function tinggi($tall = 160){
	echo "<br>Tinggi Saya seharusnya adalah $tall cm,<br>";
}

function matika($x,$y){
	$z=$x * $y;
	return $z;
}

myFunction();

ttl("Medan","1998");
ttl("Lampung Utara","1997");
ttl("Lampung","1999");
ttl("Metro","1999");

tinggi(170);
tinggi();
tinggi(149 );
tinggi(150 )."<br>";

echo "Perkalian antara 5 x 2 = ". matika(5,2);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<label for="tall"></label>
 <input type="submit" name="submit" id="tall">Tampil; 
 </body>
 </html>

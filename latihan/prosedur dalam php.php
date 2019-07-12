<?php 
//contoh prosedur

function do_print(){
	//mencetak  informasi timestamp
echo time();

}


//memanggil prosedur
do_print();
echo "<br>";


function do_date(){

		echo "default lokasi timezon PHP adalah :".date_default_timezone_get()."<br>";

		echo 'Default Timezone: ' . date('d-m-Y H:i:s');
		echo "<br>";
		$timezone = time() + (60 * 60 * 7);
		echo 'Indonesian Timezone: ' . gmdate('d-m-Y H:i:s', $timezone);
}

do_date();
echo "<br>";
//contoh fungsi penjumlahan

function jumlah($a,$b){
	return ($a + $b);
}

echo jumlah(2, 3);
//output 5

 ?>
<!DOCTYPE html>
<html>
<head>
	<title> tabel 1</title>
<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>

<div class="container">
<form method="POST" action="cek.php">
	<h2> Belajar menggunkan Form</h2>
	<table>
		
		<tr>
			<td>Nama</td>
			<td><input type="text" placeholder="masukan nama anda" name="Nama" required></td>
			<br>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea placeholder="alamat anda" name="alamat" style="font-family: arial" ></textarea></td>
			
		</tr>
		
		<tr>
			<td>Jenis Kelamin</td>
			<td><select name="jk" style="width: 173px">
				<option value="laki-laki" >laki-laki</option>
				
				<option value="perempuan" >perempuan</option>
				
				</select></td>
				
		</tr>
		<tr>
			<td>Usia</td>
			<td><input type="text" placeholder="Usia" name="Usia"></td>
			
		</tr>
<td><input type="submit" name="submit" value ="simpan"></td>


		
	</table>

</form>

<?php 
	echo @$_POST['Nama'];
	echo "<br/>";
	echo @$_POST['submit'];
 ?>
</div>
</body>
</html>
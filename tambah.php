<?php 
	include 'koneksi1.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah</title>
</head>
<body>
	<h2>Tambah Mahasiswa</h2>

	<form action="" method="post">
		<table>
			<tr>
				<td> Nama </td>
				<td> : </td>
				<td> 
				<input type="text" name="user" placeholder="Masukan Nama Anda">
				</td>
			</tr>
			<tr>
				<td>Nim</td>
				<td> : </td>
				<td><input type="text" name="pass" placeholder="Masukan Nim Anda"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="Login" value="kirim"></td>
			</tr>	
		</table>
	</form>
</body>
</html>
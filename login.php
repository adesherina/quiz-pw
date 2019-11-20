<?php 
	include 'koneksi1.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Login Mahasiswa</h2>

	<form action="proses.php" method="post">
		<table>
			<tr> 
				<td> User Name </td>
				<td> : </td>
				<td> 
				<input type="text" name="user" placeholder="Masukan UserName Anda">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td> : </td>
				<td><input type="text" name="pass" placeholder="Masukan Password Anda"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="Login" value="kirim"></td>
			</tr>	
		</table>
	</form>
</body>
</html>
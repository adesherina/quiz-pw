<?php
	include 'koneksi1.php';

	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$query = mysqli_query($conn, "SELECT * FROM login WHERE username ='$user' AND password = '$pass'");
	
	$hasil = mysqli_fetch_array($query);

	if ($hasil){
		///header('location : home.php');
		echo("<script>alert('Berhasil Login');window.location='home.php'</script>");

	} else{
		echo("<script>alert('Berhasil Login'); window.location='home.php'</script>");
	}

  ?>
<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "quispw";

	//membuat koneksi

	$conn= mysqli_connect($servername, $username, $password, $dbname);

	//cek koneksi
	if (!$conn){
		die("connection gagal :" .mysqli_connect_error());
	}


	// $sql = "SELECT kode, negara, champion from liga";
	// $result = mysqli_query($conn, $sql);
	// if (mysqli_num_rows($result)>0){
	// 	//output data dari setiap row
	// 	while ($row = mysqli_fetch_assoc($result)) {
	// 		echo "Liga".$row["negara"];
	// 		echo "Mempunyai".$row["champion"];
	// 		echo "Wakil di Liga Champion<br>";
	// 	}
	// }else{
	// 	echo "0 result";
	// }
	// mysqli_close($conn);
 ?>
<?php
	$server = "localhost";
	$uname = "root";
	$pw = "";
	$db = "pwluas";

	// membuat koneksi
	$conn = new mysqli($server, $uname, $pw, $db);

	//memilih database
	$selectdb = mysqli_select_db($conn, $db);

	// cek koneksi
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
?>




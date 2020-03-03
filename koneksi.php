<?php 
	$dbhost = "localhost";;
	$dbuser = "root";
	$dbpass = "";
	$dbname = "bhidarah";

	$koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	//periksa koneksi, tampilkan pesan kesalahan jika gagal
	if(!$koneksi){
		die("koneksi dengan database gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error());
	}

?>
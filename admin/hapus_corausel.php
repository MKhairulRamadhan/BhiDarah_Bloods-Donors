<?php

	include "../koneksi.php";

	$ambil = $koneksi->query("SELECT * FROM event_corausel WHERE id = '$_GET[id]'");

	$pecah = $ambil->fetch_assoc();
	$gambarikan = $pecah['gambar'];
	if (file_exists("../image/event/$gambarikan")) {
		unlink("../image/event/$gambarikan");
	}

	$koneksi->query("DELETE FROM event_corausel WHERE id = '$_GET[id]'");
 
	echo "<script>alert('Event corausel dihapus');</script>";
	echo "<script>location='event_slider.php'</script>";

?>
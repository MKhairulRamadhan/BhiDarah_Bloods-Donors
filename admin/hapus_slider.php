<?php

	include "../koneksi.php";

	$ambil = $koneksi->query("SELECT * FROM slider WHERE id_slider = '$_GET[id]'");

	$pecah = $ambil->fetch_assoc();
	$gambarikan = $pecah['gambar'];
	if (file_exists("../image/event/$gambarikan")) {
		unlink("../image/event/$gambarikan");
	}

	$koneksi->query("DELETE FROM slider WHERE id_slider = '$_GET[id]'");
 
	echo "<script>alert('Slider dihapus');</script>";
	echo "<script>location='event_slider.php'</script>";

?>
<?php

	include "../koneksi.php";

	$ambil = $koneksi->query("SELECT * FROM artikel WHERE id_artikel = '$_GET[id]'");

	$pecah = $ambil->fetch_assoc();
	$gambar = $pecah['gambar_artikel'];
	if (file_exists("../image/artikel/$gambar")) {
		unlink("../image/artikel/$gambar");
	}

	$koneksi->query("DELETE FROM artikel WHERE id_artikel = '$_GET[id]'");
 
	echo "<script>alert('Artikel dihapus');</script>";
	echo "<script>location='artikel.php'</script>";

?>
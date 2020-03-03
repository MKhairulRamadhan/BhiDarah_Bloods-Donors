<?php

	include "../koneksi.php";

	$ambil = $koneksi->query("SELECT * FROM user WHERE id_user = '$_GET[id]'");

	$pecah = $ambil->fetch_assoc();
	$gambarikan = $pecah['gambar_user'];
	if (file_exists("../image/profil/$gambarikan") && (!empty($gambarikan))) {
		unlink("../image/profil/$gambarikan");
	}

	$koneksi->query("DELETE FROM user WHERE id_user = '$_GET[id]'");
 
	echo "<script>alert('User dihapus');</script>";
	echo "<script>location='user_list.php'</script>";

?>
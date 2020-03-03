<?php

	include "../koneksi.php";

	$koneksi->query("DELETE FROM recipient WHERE id_recipient = '$_GET[id]'");
 
	echo "<script>alert('Recipient dihapus');</script>";
	echo "<script>location='receipent_list.php'</script>";

?>
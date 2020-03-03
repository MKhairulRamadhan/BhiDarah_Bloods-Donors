<?php

	include "../koneksi.php";

	$koneksi->query("DELETE FROM volunteer WHERE id_volunteer = '$_GET[id]'");
 
	echo "<script>alert('Volunteer dihapus');</script>";
	echo "<script>location='volunteer_list.php'</script>";

?>
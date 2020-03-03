<?php 
	session_start();
	session_destroy();
	unset($_SESSION["admin"]);
	echo "<script>alert('anda telah logout');</script>";
	echo "<script>location='../login.php'</script>";	
?>
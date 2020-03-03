<?php 
	session_start();
	session_destroy();
	unset($_SESSION["user"]);
	echo "<script>alert('anda telah logout');</script>";
	echo "<script>location='login.php'</script>";	
?>
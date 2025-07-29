<?php
	session_start();
	session_destroy();
	echo '<script>alert("Terimakasih Telah Berbelanja");window.location="home.php"</script>';
?>
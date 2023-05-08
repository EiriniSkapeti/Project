<?php
	
	
	if(isset($_SESSION['user'])){
		// remove all session variables
		session_unset();

		// destroy the session
		session_destroy();
		echo "Bravo ekanes logout<br>";
		header("Refresh:2; url=index.php");
		//include('index.php');
		die();
		
	}else{
		//echo "Pou pas re file??<br>";
		header("Refresh:2; url=index.php");
		//include('index.php');
		die();
		
	}

?>
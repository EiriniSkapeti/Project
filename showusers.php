<?php
	session_start();
/*
	if(!isset($_SESSION['user'])){
		echo "Pou pas ??<br>";
		header("Refresh:2; url=index.php");
		die();
	}

	if($_SESSION['user']!="root"){
		echo "Pou pas ??<br>";
		header("Refresh:2; url=index.php");
		die();
	}
	*/
	require_once('dbfunctions.php');//include sth C
	$conn=db_connect();
	$sql="select * from users";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
			while($row=mysqli_fetch_assoc($result)){
				$un=$row['username'];
				$em=$row['email'];
				$ps=$row['password'];
				$gd=$row['gender'];

				echo $un." ".$em." ".$ps." ".$gd."<br>";

			}
	}else{
		echo "Den yparxoun users :/ <br>";
	}
	mysqli_close($conn);

?>

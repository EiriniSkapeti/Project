<?php
	if(isset($_POST['register'])){
	//	echo "Eimai sto registerSQL<br>";
	//	print_r($_POST);
		$server="localhost";
		$username="id16177386_users";
		$pass="1548sksite#58A";
		$db="id16177386_www_2020";
		$conn=mysqli_connect($server,$username,$pass,$db);
		
		if($conn===false){
			echo mysqli_connect_error();
			die();
		}else{
			echo "Successfully connect to DB!!!<br>";
		}
		
		$un=$_POST['username'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$g=$_POST['gender'];
		$sql="select * from users where username='$un'";
	//	echo $sql."<br>";
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result)==1){
			echo "Sorry alla vres allo username<br>";
		}else{
			$sql="insert into users (username,email,password,gender)
			values ('$un','$email','$pass','$g')";
			
		//	echo $sql."<br>";
			if(mysqli_query($conn,$sql)){
				echo "Bravo ekanes register<br>";
				include ('index2.html');
				//header("Refresh:2; url=index.php");
			}else{
				echo "Error".$sql.$mysqli_error($conn);
				die();
			}		
		}
	}else{
			echo "Pou pas re file??<br>";
			header("Refresh:2; url=register.php");
			die();
	}
	
	

	
	
	
	
	
	
	

?>
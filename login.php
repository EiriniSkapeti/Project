<!DOCTYPE HTML>  
<html lang="el">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Stella Giatsou, Eirini Skapeti">
		<meta name="viewport" content="width=device-width, initial-sale=1.0"> <!--gia na fainetai se oles tis syskeyes swsta-->
		
  
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
			.login {float:right;}
		</style>
	</head>

	<body>
	<section class="light">
			<blockquote class="blockquote text-center mb-0"">
				<div class="row">
					<div class="col"></div>
						<div class="col">
						<ul class="list-unstyled">
							<li> Create account <a href="register.php">here</a></li>
							
						<ul>
						</div>
					<div class="col"></div>
					
				</blockquote>
			</div>
	</section>

<?php

		
		if(isset($_SESSION['user'])){
			echo "exeis kanei hdh login<br>";
				header("Refresh:2; url=index.php");
				die();
		?>
		
	<?php 
		}
		
		if(isset($_POST['login'])){
			$un=$_POST['username'];
			$p=$_POST['pass'];
			
			require_once('dbfunctions.php');//include sth C
			$conn=db_connect();
			
			
			$sql="select * from users where username='$un' and password='$p'";
			//echo $sql."<br>";
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>1){
				echo "giati panw apo 2 eggrafes????<br>";
				die();			
			}else if(mysqli_num_rows($result)==1){
				//exei kanei swsta login!
				$_SESSION['user']=$un;
				echo "Connected<br>";
				include 'index.php';
				die();
				
			}else{
				echo "Wrong username or password?";
				include 'loginform.php';
				
			}
			
			
		}else{
			include 'loginform.php';
		}
		

	?>
	</body>
</html>
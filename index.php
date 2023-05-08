<!DOCTYPE HTML>  
<html>
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

<?php

	//session_start();
	
	//pws tha katalavw oti ena xrhsths exei kanei login nwritera???
	if(isset($_SESSION['user'])){
		//eimai syndemenos
		$u=$_SESSION['user'];
		echo "Welcome user $u<br>";
	
		if($_SESSION['user']=="root"){
			include ('index1.html');
			
		}
		
		include ('index2.html');
	}else{
		//den eimai syndemenos
		//include ('index.html');
	
	}

?>
<div id="goToTop"></div>
	<nav class="navbar navbar-light shadow-sm bg-white navbar-expand-lg">
		<a href="index.html" class="navbar-brand">E/S-Photography</a> 
		<button class="navbar-toggler" type="button" data-toggle="collapse" type="button" data-toggle="collapse" data-target="#myBar">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div id="myBar" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="#" class="nav-link"> About </a></li>
				<li class="nav-item"><a href="#" class="nav-link"> Features </a></li>
				
			</ul>
			<button type="button" class="btn" data-toggle="collapse" ><a href="login.php">Login</a></button>
			
			
		<div>
	</nav>
	
	<!-- The Modal -->
	<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
	
		<!-- Modal Header -->
		<div class="modal-header">
			<h4 class="modal-title">Login</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
	
		<!-- Modal body -->
		<div class="modal-body">
			<form>
				<div class="form-group">
					<input class="form-control" type="email" placeholder="Enter your email:">
				</div>
				<div class="form-group">
					<input class="form-control" type="password" placeholder="Enter your password:">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			
			</form>
		</div>
	
		<!-- Modal footer -->
		<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
	
		</div>
	</div>
	</div>
	
	<section class="bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 order-lg-1 order-2">
					<h1>Profile</h1>
					<p class="lead">We are two young girls who love photography. 
					</p>
					<p>
					<!--	<a href="#" class="btn btn-primary shadow mr-2"> Discover more </a>
						<a href="#" class="btn btn-outline-primary shadow"> Some other function</a>
					-->
					</p>
				</div>
				
				<div class="col-lg-6 order-lg-2 order-1">
					<img src="up.JPG" class="img-fluid rounded"></div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<h2>Services</h2>
			
			<p class="text-muted">Αναλαμβάνουμε φωτογραφίσεις και βίντεο! 
			</p>
			<div class="row">
				<div class="col-md-6 col-lg-4 mb-3">
					<i class="fas fa-church"></i>
					<h6>Σε βαφτίσια</h6>
					<p class="text-muted">Οπουδήποτε στην Ελλάδα και στο Εξωτερικό.</p>
				</div>				
				<div class="col-md-6 col-lg-4 mb-3">
					<i class="fas fa-glass-cheers"></i>
					<h6>Σε γάμους</h6>
					<p class="text-muted">Εντός και εκτός Ελλάδος.</p>
				</div>	
				<div class="col-md-6 col-lg-4 mb-3">
					<i class="fas fa-user-graduate"></i>
					<h6>Σε τελετές ορκομωσίας</h6>
					<p class="text-muted">Για όσους τυχερούς απολαύσουν αυτή την εμπειρία.</p>
				</div>	
				<div class="col-md-6 col-lg-4 mb-3">
					<i class="fas fa-chart-line"></i>
					<h6>Για αγγελίες ακινήτων</h6>
					<p class="text-muted">Εάν θέλετε να πουλήσετε ή να ενοικιάσετε ταχύτατα ένα δικός σας ακίνητο τότε είμαστε οι άνθρωποί σας για τη καλύτερη διαφήμισή σας.</p>
				</div>	
				<div class="col-md-6 col-lg-4 mb-3">
					<i class="fas fa-user-friends"></i>
					<h6>Σε οικογενειακές στιγμές</h6>
					<p class="text-muted">Είμαστε εδώ για να μη σας μείνουν οι οικογενειακές στιγμές μόνο αξέχαστες αλλά και απαθανατισμένες.</p>
				</div>	
				<div class="col-md-6 col-lg-4 mb-3">
					<i class="fas fa-camera-retro"></i>
					<h6>Για διαφημιστική φωτογράφιση</h6>
					<p class="text-muted">Προωθήστε την επιχείρηση σας με αξέχαστες φωτογραφίες. Επίσης, αν έχεις τις φιλοδεξίες 
											για να γίνεις το ανερχόμενο μοντέλο, είμαστε εδώ για την polaroid σου.
					</p>
				</div>	
			</div>
		<div>
	</section>
	
	<section class="bg-light">
		<div class="container">
		<h2>Portfolio</h2>
			
			<p class="text-muted">Παρακάτω έχουμε αναρτήσει μερικές από τις φωτογραφίες μας.
			</p>
			<div class="row row2">
				<div class="col-md-4 mb-4">
					<img src="image1.JPG" class="card-img-top">
				</div>
				
				<div class="col-md-4 mb-4">
					<img src="image2.JPG" class="card-img-top" >
				</div>

				
				<div class="col-md-4 mb-4">
					<img src="image3.JPG" class="card-img-top">
				</div>
				
				<div class="col-md-4 mb-4">
					<img src="image4.JPG" class="card-img-top">
				</div>
				
				
				
				<div class="col-md-4 mb-4">
					<img src="image5.jpg" class="card-img-top">
				</div>
				
				<div class="col-md-4 mb-4">
					<img src="image6.jpg" class="card-img-top">
				</div>
			
				
				<div class="col-md-4 mb-4">
					<img src="image8.JPG" class="card-img-top">
				</div>
				
				<div class="col-md-4 mb-4">
					<img src="image9.JPG" class="card-img-top">
				</div>
				
				<div class="col-md-4 mb-4">
					<img src="image10.jpg" class="card-img-top">
				</div>
				
				<div class="col-md-4 mb-4">
					<img src="image11.jpg" class="card-img-top">
				</div>
				
				<div class="col-md-4 mb-4">
					<img src="image12.jpg" class="card-img-top">
				</div>
				
				<div class="col-md-4 mb-4">
					<img src="image13.JPG" class="card-img-top">
				</div>
				
			</div>
		</div>
	
	</section>
	
	<section>
		<div class="container">
			<blockquote class="blockquote text-center mb-0">
				<i class="far fa-camera" style="font-size:60px;"> </i>
				<p>Photography is the story I fail to put into words!</p>
				
			</blockquote> 
		</div>
	</section>
	
	<section class="bg-light">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-4">
					<h5> Contact </h5>
					<ul class="list-unstyled">
						<li><i class="fas fa-phone-alt" style="font-size:20px;" color="black"></i> +306945566780</li>
						<li><i class="fas fa-map-marker" style="font-size:20px;" color="black"></i> LAmia, TK 35100</li>
						<li><i class="fas fa-map-marker" style="font-size:20px;" color="black"></i> Email <a href="mailto:stelagiatsou@gmail.com?&subject=Ερώτηση&body=Απορία%20σχετικά%20με.." target="_top">here!</a></li>
					<ul>
				</div>
				
			</div>
		</div>
	</section>
	
	<section class="bg-dark text-white pt-1 pb-1">
		<div class="container">
			<div class="row pt-2">
				<div class="col-md-8">
					<p> Made by Eirini Skapeti and Stella Giatsou</p>
				</div>
					
				<div class="col-md-4">
					<a class="text-muted" href="#goToTop"><i class="fas fa-arrow-up" style="font-size:20px; color:white;"></i></a>
				</div>
			
			</div>
		</div>
	
	</section>
	
	
</body>
</html>
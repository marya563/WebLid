<?PHP
include_once "../Model/partenaire.php";
include_once "../Controller/partenaireC.php";


if (isset($_GET['id'])){
    $utilisateurC=new PartenaireC();
    $result=$utilisateurC->recupererPartenaire($_GET['id']);
    foreach($result as $row){
        $id=$row['id'];
        $detail=$row['nom']; 
        $nom_partenaire=$row['prenom'] ; 
		$specialite=$row['adresse'] ;   
		$img1=$row['pdp'] ;    
		$img2=$row['tel'] ;   
		    



	
       
    }
}
	?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">   
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	

    

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="/views/Front/images/logob.png" height="80" width="250">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">

						<li class="nav-item active"><a class="nav-link" href="index.php">Nos Partenaires</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item dropdown">
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.php">Reservation</a>
								<a class="dropdown-item" href="stuff.php">Stuff</a> </div>
						</li>

						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Paramètres</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="modifiermoncompte.php">Modifier mon compte</a>
								<a class="dropdown-item" href="../Views/deconnexion.php">Déconnexion</a> </div>
						</li>

						<!--<li class="nav-item"><a class="nav-link" href="../Views/deconnexion.php">Déconnexion</a></li> -->

					</ul>
				</div>
			</div>
		</nav>
	</header>
    <!-- End header -->
    <!-- Start slides -->
	<!--<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/omekhouria/42478658_2060882980892505_7505888746319904768_n.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Bienvenue Chez <br> <?PHP echo $nom_partenaire?></strong></h1>
							<p class="m-b-40"></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img <?PHP echo "<img src=\"images/{$pdp}\">"?>alt="">
			</li>
			
                
                
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
    <!-- End Of Slider-->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
			<img <?PHP echo "<img src=\"images/{$pdp}\">"?>alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12"> 
						
						<h1 class="m-b-20"><strong>Bienvenue Chez <br> <?PHP echo $nom?></strong></h1>
							
							
						</div>
					</div>
				</div>
			</li>
			
			
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
  

    <hr>
            <!--Item 2-->
            
    <div id="Information">
        <h1 class="partenaire"><b><u>Informations</u></b></h1>
<ul id="info">
	<li><b>tel:</b><?PHP echo $tel?></li> 
	<li><b>adresse:</b><?PHP echo $adresse?></li>
	<li><b>prenom:</b><?PHP echo $prenom?></li>



</ul>
    </div>
    
    
	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>




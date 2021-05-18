<?php
include_once "../Controller/PartenaireC.php";
$partenaire1C=new PartenaireC();
$listePartenaire=$partenaire1C->afficherPartenaire();
// On prolonge la session
session_start();

// On teste si la variable de session existe et contient une valeur
if (empty($_SESSION['e'])) {
	// Si inexistante ou nulle, on redirige vers le formulaire de login
	header('Location: signin.php');
}

/*$dest = "alalemjid284@gmail.com";
  $sujet = "Email de test";
  $corp = "Salut ceci est un email de test envoyer par un script PHP";
  $headers = "From: alalemjid284@gmail.com";
  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }
   // echo ('<script> alert("Nous vous avons envoyer un mail"); </script>');*/

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
	<title>BOOMER'Z </title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Site Icons -->
	<link rel="apple-touch-icon" sizes="76x76" href="../Views/images/boomerz.png">
  <link rel="icon" type="image/png" href="../Views/images/boomerz.png">

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
					<img src="../Views/images/boomerz.png" height="100" width="200">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">

						<li class="nav-item active"><a class="nav-link" href="index.php">Nos Partenaires</a></li>
					
						<li class="nav-item"><a class="nav-link" href="ajouterReclamation.php"> Réclamations	</a></li>
						

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
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/slid.JPG" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Bienvenue chez  <br> BOOMER'Z <br> <?php echo($_SESSION['e']); ?> </strong></h1>
							<p class="m-b-40">Be the change you want to see.</p>
		
							
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/slide.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						<h1 class="m-b-20"><strong>Bienvenue chez <br> BOOMER'Z <br> <?php echo($_SESSION['e']); ?> </strong></h1>

							<p class="m-b-40">Be the change you want to see </p>
								
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/ab.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						<h1 class="m-b-20"><strong>Bienvenue chez <br> BOOMER'Z <br> <?php echo($_SESSION['e']); ?> </strong></h1>
							<p class="m-b-40">Be the change you want to see </p>
								
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
	<!-- End slides -->

	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/about-img.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1> <?php
								// Il est bien connecté
								echo 'Bienvenue ', $_SESSION['e'];
								echo ('<script> alert("Bienvenue, voici notre page d Nos Partenaires"); </script>');
								?>
						</h1>
						<h1>Welcome boomerz</h1>
						<h4>Little Story</h4>
						<p>We do not remember the days, but rather the MOMENTS </p>
						<p>Lorsqu’un événement malheureux survient, nous avons trois choix : le laisser définir notre vie, le laisser nous détruire ou s’en servir pour devenir plus fort.</p>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->

	<!-- Start QT -->
	
	<!-- End QT -->

	<!-- Start Menu -->
	<main>
		<h1 class="acc"><strong>Nos Partenaires</strong></h1> 
		
	<table>
		<tr> 
		<?PHP
     					 foreach($listePartenaire as $row){
     					 ?>
			<td>
				
				<figure class="container"> 
				
					<h1 class="nomfig"><?PHP echo $row['nom'];  ?></h1>

					<img class="img" alt="" width="350" <?PHP echo "<img src=\"../Back/images/{$row['pdp']}\">"?> </a>
					<h1 class="nomfig"><?PHP echo $row['adresse'];  ?></h1>
					<h1 class="nomfig"><?PHP echo $row['tel'];  ?></h1>

					
					
			</figure>
		</td> 
		<?PHP 
    
}
    ?>
			
		</tr>
		</table> 
		
	</main>
	<!-- End Menu -->

	
	<!-- End Gallery -->



	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+21654134805
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							yourmail@gmail.com
						</p>
					</div>
				</div>


			</div>
		</div>
	</div>
	<!-- End Contact info -->

	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare turpis ultrices sit amet. Nulla cursus lorem ut nisi porta, ac eleifend arcu ultrices.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead"><a href="#">+21654134805</a></p>
					<p><a href="#"> info@admin.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">a</a> Design By :
							<a href="https://html.design/">html design</a></p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

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
	
	


<span class="heading">User Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p>4.1 average based on 254 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>63</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>15</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>20</div>
  </div>
</div>




</body>

</html>
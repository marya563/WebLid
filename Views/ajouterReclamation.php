
<?php
include_once '../Model/reclamation.php';
include_once '../Controller/reclamationC.php';
session_start();
if(isset($_POST['id_user']) and isset($_POST['nom'])and isset($_POST['prenom']) and isset($_POST['email'])and isset($_POST['typeRec'])and isset($_POST['idRec']) and isset($_POST['commentaire']))
	{
        $rec1=new reclamation($_POST['id_user'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['typeRec'],$_POST['idRec'],$_POST['commentaire']);
        $RC=new reclamationC();
        
        $RC->ajouterReclamation($rec1);


header("location:ajouterReclamation.php");

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
	<title>Dar Mima </title>
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
	<!-- Pickadate CSS -->
	<link rel="stylesheet" href="css/classic.css">
	<link rel="stylesheet" href="css/classic.date.css">
	<link rel="stylesheet" href="css/classic.time.css">
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
				<a class="navbar-brand" href="index.html">
					<img src="../Views/images/boomerz.png" height="80" width="250">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
					<li class="nav-item "><a class="nav-link" href="index.php">Nos Partenaires</a></li>
					<li class="nav-item"><a class="nav-link" href="ajouterReclamation.php">Réclamations</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						
							
								
								

						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Paramètres</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="modifiermoncompte.php">Modifier mon compte</a>
								<a class="dropdown-item" href="../Views/deconnexion.php">Déconnexion</a> </div>
						</li>

					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12" src="../image/reclamation.jpg" >
					<h1>Réclamation</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<!-- Start Reservation -->
	<div class="container">
	<div class="container">
					<div class="container">
						<div class="container">
							<div class="container">
								
								<div class="panel-body">
									<div class="container">
										<form method="POST" action="ajouterReclamation.php">
											<center>
												<div>
													<label>id user</label></br>
													<input type="number" id="id_user" name="id_user"  Required>
												</div>
												<div>
													<label>nom</label></br>
													<input type="text" name="nom" id="nom" placeholder="nom" onfocusout="majus_nom()" Required>
												</div>
												<label id="element" name="erreur" style="color: red;display: none;">Le nom doit commencer par une majuscule </label>

												<div>
													<label>prenom</label></br>
													<input type="text" name="prenom" id="prenom" placeholder="prenom" onfocusout="majus_prenom()" Required>
												</div>
												<label id="element1" name="erreur" style="color: red;display: none;">Le prenom doit commencer par une majuscule </label>

												<div>
													<label>email</label></br>
													<input type="text" name="email" id="email" placeholder="Enter mail" onfocusout="ad_email()" Required>
												</div>
												<label id="elementemail" name="erreur" style="color: red;display: none;">L'adresse email est invalide </label>

												<div>
													<label>typeRec</label></br>
													<input type="text" name="typeRec" id="typeRec" placeholder="Enter Type" onfocusout="majus_prenom2()"Required >
												</div>
												<label id="element5	" name="erreur" style="color: red;display: none;">Veuillez saisir le type de réclamation </label>
												<div>
													<label>idRec</label></br>
													<input type="number" name="idRec" id="idRec" required="required">
												</div>
												<div>
													<label>commentaire</label></br>
													<input type="text" name="commentaire" id="commentaire"onfocusout="majus_prenom3()" Required>
												</div>
												<label id="element6" name="erreur" style="color: red;display: none;">Ce champs est obligatoire </label>
												</br>
												<input type="submit" name="ajouter" value="Ajouter Reclamation" required="required"  class="btn btn-primary">
											</center>
										</form>
									</div>
									<script>
        function majus_nom() {
            var ch = document.getElementById("nom").value;
            var element = document.getElementById("element");
            if ((ch === "") || (ch.charCodeAt(0) < 65) || (ch.charCodeAt(0) > 91)) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }

        function majus_prenom() {
            var ch = document.getElementById("prenom").value;
            var element = document.getElementById("element1");
            if ((ch === "") || (ch.charCodeAt(0) < 65) || (ch.charCodeAt(0) > 91)) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }
		function majus_prenom2() {
            var ch = document.getElementById("typeRec").value;
            var element = document.getElementById("element5");
            if ((ch === "") || (ch.charCodeAt(0) < 65) || (ch.charCodeAt(0) > 91)) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }
		function majus_prenom3() {
            var ch = document.getElementById("commentaire").value;
            var element = document.getElementById("element6");
            if ((ch === "") || (ch.charCodeAt(0) < 65) || (ch.charCodeAt(0) > 91)) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        }

        function ad_email() {
            var expressionReguliere = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
            var element = document.getElementById("elementemail");
            if (expressionReguliere.test(document.getElementById("email").value)) {
                element.style.display = "none";
            } else {
                element.style.display = "block";
            }
			function validation() {
            majus_nom();
            majus_prenom();
            ad_email();
            telephonefc();
            cinfc();
            prof();
            passf();
            vide_unique_log();
            var error1 = document.getElementById("element");
            var error2 = document.getElementById("element1");
			var error5 = document.getElementById("element5");
			var error7 = document.getElementById("element6");
            var error6 = document.getElementById("elementemail");
           
            var ch = document.getElementById("nom").value;
            var ch1 = document.getElementById("prenom").value;

            if ((error0.style.display == "none") && (error1.style.display == "none") && (error2.style.display == "none") && (error6.style.display == "none") &&(error5.style.display == "none") &&(error7.style.display == "none"))
                alert("Formulaire bien rempli");
            else alert("Votre formulaire est mal rempli");
        }
        }</script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	<!-- End Reservation -->



	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+21622333124
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
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
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
					<p class="lead"><a href="#">+21622333124</a></p>
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
						<p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Dar Mimaa</a> Design By :
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
	<script src="js/picker.js"></script>
	<script src="js/picker.date.js"></script>
	<script src="js/picker.time.js"></script>
	<script src="js/legacy.js"></script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>

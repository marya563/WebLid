<?php
include 'model/lieu.php';
   
    include_once 'lieuC.php';

	
	


    $error = "";

    // create user
   // $user = null;

    // create an instance of the controller
    $lC = new lieuC();
    if (
        isset($_POST["lieu"]) && 
		isset($_POST["adress"])

    ) {
        if ( 
            !empty($_POST["lieu"]) && 
    
			!empty($_POST["adress"])

        ) {
            $l = new lieu( 
                $_POST['lieu'],
                
				$_POST['adress']


            );
            $lC->ajouterlieu($l);
			header('Location:tables.php');
        }
        else
            $error = "Missing information";
    }

	

	

    
?>

<!DOCTYPE html>
<html>
<head>
<title>ajouter lieu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
		<h2>AJOUTER LIEU</h2>
		<form action="" method="POST">
			
				
				
		
			
				<span class="username">lieu:</span>
				<input type="string" name="lieu" class="name" placeholder="" required="">
				
			
			
				<span class="username">adress</span>
				<input type="string" name="adress" class="name" placeholder="" required="">
				
			
				
			
			<div class="">
					<input type="submit" class="login" value="ajouter">
			</div>
			
		</form>
		<div class="back">
						<a href="tables.php">Back to home</a>
				</div>
				<div class="footer">
					<p>&copy; 2016 Pooled . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
				</div>
	</div>
	</div>
	</div>
	
</body>
</html>


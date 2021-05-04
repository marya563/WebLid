<?php
include 'model/lieu.php';
   
    include_once 'lieuC.php';

	
	


    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new lieuC();
	if (
        isset($_POST["nom"]) && 
        
		isset($_POST["type"])

    ) {
        if ( 
            !empty($_POST["nom"]) && 
           
			!empty($_POST["type"])

        ) {
            $user = new lieu( 
				
                $_POST['nom'],
                
				$_POST['type']

            );
			
            $userC->modifierlieu($user,$_GET['id']);
			header('Location:tables.php');
			
          
        }
        else
            $error = "Missing information";
    }

	

	

    
?>

<!DOCTYPE html>
<html>
<head>
<title>modifier lieu</title>
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
		<h2>MODIFIER lieu</h2>

     <div id="error">
     <?php echo $error ?>
	 </div>

	 <?php if(isset($_GET['id'])){
		 $user=$userC->recupererlieu($_GET['id']);
	 } ?>



		<form action="" method="POST">
		
			<!--<div $id=id value ="/*<?php// echo $user['id']; ?>*/"></div>-->
		
			<div class="username">
				<span class="username">lieu:</span>
				<input type="string" name="lieu" id="lieu" class="name" placeholder="" required="" value="<?php echo $user['lieu']; ?>">
				<div class="clearfix"></div>
			</div>
			<div class="username">
				<span class="username">nombre de participant</span>
				<input type="int" name="adress" id="adress" class="name" placeholder="" required=""  value="<?php echo $user['adress']; ?>">
				<div class="clearfix"></div>
			</div>
			
			<div class="login-w3">
					<input type="submit" class="login" value="modifier" onclick="modif()">
			</div>
			<div class="clearfix"></div>
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
	<script>

function modif()
{
	return("modifier avec succées !");
}
</script>
</body>
</html>



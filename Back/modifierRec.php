
<?php
include_once "../Model/reclamation.php";
include_once "../Controller/reclamationC.php";


	$id_user= $_POST["id_user"] ;
	$nom= $_POST["prenom"] ;
	$prenom= $_POST["prenom"] ;
	$email= $_POST["email"] ;
 	$typeRec=$_POST["typeRec"];
	$idRec= $_POST["idRec"] ;
	$commentaire= $_POST["commentaire"] ;
	 
	
	$RC=new reclamationC();
	
	$listereclamations=$RC->modifierreclamation($id_user,$nom,$prenom,$email,$typeRec,$idRec,$commentaire);
	
	header("location:reclamations.php");

  
?>
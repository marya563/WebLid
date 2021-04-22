<?php
$link = mysqli_connect("localhost", "root", "", "projet"); 
$id=$_GET['id'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$adresse=$_GET['adresse'];
$sexe=$_GET['sexe'];
$tel=$_GET['tel'];

echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error());
} 
  
$sql = "UPDATE utilisateur SET nom='$nom',prenom='$prenom',adresse='$adresse',sexe='$sexe',tel='$tel' WHERE id='$id' "; 
if(mysqli_query($link, $sql)){ 
    header('location:affichageUtilisateur.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link);  
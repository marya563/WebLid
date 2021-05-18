<?php
$link = mysqli_connect("localhost", "root", "", "projet"); 
$id=$_GET['id'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$adresse=$_GET['adresse'];
$pdp=$_GET['pdp'];
$tel=$_GET['tel'];

echo($id);
if($link === false){ 
    die("ERROR: Could not connect. "  
                . mysqli_connect_error());
} 
  
$sql = "UPDATE partenaire SET nom='$nom',prenom='$prenom',adresse='$adresse',pdp='$pdp',tel='$tel' WHERE id='$id' "; 
if(mysqli_query($link, $sql)){ 
    header('location:affichagePartenaire.php');
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($link); 
}  
mysqli_close($link);  
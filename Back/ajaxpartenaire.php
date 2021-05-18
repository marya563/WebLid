<?PHP 
include_once "../Model/partenaire.php";
include_once "../Controller/partenaireC.php";
$partenaire1C=new PartenaireC(); 

if(!isset($_POST['str'])){
    $liste=$partenaire1C->afficherPartenaire();
}
foreach($liste as $row){
    ?>
       <tr>
       <td><?PHP echo $row['id'];  ?></td> 
       <td><?PHP echo $row['nom']; ?></td>
       <td><?PHP echo $row['prenom']; ?></td> 
       <td><form method="POST" action="supprimerEvenement.php">  
       <input class="btn btn-danger"  type="submit" title="Delete" Value="Delete" border="0" name="supprimer">
       <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id"> 
       
       </form> 
       <a href="edit-events.php?id=<?PHP echo $row['id']; ?>" class="btn btn-success" data-toggle="tooltip" title="Edit" >Edit<i class="fas fa-pencil-alt"></i></a>
       </td>
       </tr>
       <?PHP 
    
}
    ?>
<?php
   include '../Controller/PdvC.php';
    $pdvC = new pdvC();
       if (isset($_POST["id_pdv"])){
       $pdvC->supprimerpdv($_POST["id_pdv"]);
       header('Location:afficherPdv.php');
   }
?>
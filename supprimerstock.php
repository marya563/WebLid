<?php
   include '../Controller/stockC.php';
    $stockC = new stockC();
       if (isset($_POST["id_stock"])){
       $stockC->supprimerstock($_POST["id_stock"]);
       header('Location:index2.php');
   }
?>
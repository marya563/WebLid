
       <?php
    include "../controller/PdvC.php";
        include_once "../config.php";
        $editid =$_GET['editid'] ;
        $PdvC=new PdvC();
        $listepdv =$PdvC->getPromotion($editid);
      ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Modification d'un produit</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

<style type="text/css">
    .hide {
  display: none;
}
</style>
<script language="JavaScript" type="text/javascript">
 function CloseAndRefresh() 
  {
     opener.location.reload(true);
     self.close();
  }
</script>

</head>

<body>
    <?PHP
                                            foreach($listepdv as $pdv){
                                            ?>

      <form action="modifp.php?id_pdv=<?php echo $pdv['id_pdv'];?>" method="post" nctype="multipart/form-data">
        <br>
        <br>
        
     <div >
                       

            <div>
                <label>Nom </label>
                <div>
                        <input type="text" name="nom_pdv" value="<?php echo $row['nom_pdv'];?>">
                </div>
            </div>

          

            <div>
                <label>Nom </label>
                <div>
                        <input type="text" name="adresse_pdv" value="<?php echo $row['adresse_pdv'];?>">
                </div>
            </div>


            <div >
                    <label>Quantité </label>
                    <div >
                            <input type="number" name="nb_employee" value="<?php echo $row['nb_employee'];?>">
                    </div>
                </div>
                <br>
                <br>
                <div >
                   
                                         <?PHP
}
?>
                                                <hr>
                 
                        
                                    <div class="card-footer" align="center">
                                        <button type="submit" class="btn btn-primary btn-sm" onclick="controle();CloseAndRefresh();return:true;" >

                                            <i class="fa fa-dot-circle-o"></i> Editer
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Annuler
                                        </button>

                                        <a href="index.php" class="btn btn-secondary">Retour </a>




                                    </div>


</form>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/controle.js" ></script>
</body>

</html>
<!-- end document-->
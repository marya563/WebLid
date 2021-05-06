<?php  
 $connect = mysqli_connect("localhost", "root", "", "webleith");  
 $query = "SELECT nb_employee, count(*) as number FROM pdv GROUP BY nb_employee";  
 $result = mysqli_query($connect, $query);  
 ?>  
 
<!DOCTYPE html>
<html lang="en">

<head>
 <style type="text/css">  


.date
 { text-align: center ;
}

</style>

   
    
    <!-- Title Page-->
<title>Gestion des Points de vente</title>
    <!-- Fontfaces CSS-->
  

    <!-- Main CSS-->
  

<title>chart with PHP & Mysql | lisenme.com </title>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
   <title>Webslesson Tutorial | Statistiques des clients selon leur etat </title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['nb_employee', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["nb_employee"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Statistiques des Client selon leur etat ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  



<body class="animsition">
    
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
       
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            
            <!-- END HEADER DESKTOP-->

            
                                <!--  Data table-->
                            <br><br><br><br>
                      
 



 
     
           <br /><br />  
           <div style="width:700px;">  
                <h3 align="center">Statistiques des Clients selon leur etat </h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
								
					

  <!-- <script> 
function myFunction() {
  alert("Votre Produit a été ajouté !");
  window.location="/Gestions%20des%20produits.html";
  
}
</script> -->

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

</body>

</html>
<!-- end document-->



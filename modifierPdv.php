<?PHP
include "../controller/PdvC.php";
include_once '../Model/Pdv.php';

if (isset($_GET['id_pdv'])){
 $pdv1C = new pdvC(); 

    $result=$pdv1C->recupererpdv($_GET['id_pdv']);
    foreach($result as $row){
        
           $adresse_pdv=$row['adresse_pdv'];
        $nom_pdv=$row['nom_pdv'];
        $nb_employee=$row['nb_employee'];
?>
<html>
	<head>
		<title>Modifier pdv</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherpdv.php">Retour à la liste</a></button>
        <hr>

	 <form name="form1" method="POST" action="modif.php?id=<?PHP echo $id_pdv ?>">
                                  
                                    <table class="table table-data2">
                                        <thead>

                                            <tr>
                                                
                                                
                                                <th>titre</th>
                                                <th>image</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <div >
                                        <tbody >
                                            <tr style="background-color: #E5E1EA;">
                                                
                                                
                                                <td><input type="text" name="titre" value="<?PHP echo $adresse_pdv ?>"></td>
                                                <td ><input type="text" name="nom" value="<?PHP echo $nom_pdv ?>"></td>
                                                                                                <td ><input type="text" name="nom" value="<?PHP echo $nb_employee ?>"></td>

                                                
                                            </tr>
                                            
                                    
                                        </tbody>
                                        </div>
                                        
                                      
                                        
                                    </table>
                                    <table>
                                         <tr>
                                    <button class="add" onclick="verifier()" name="modifier"> modifier </button>
                                    </tr>
                                    </table>
                                    </form>
		   <?PHP
    
}}
?>
	</body>
</html>
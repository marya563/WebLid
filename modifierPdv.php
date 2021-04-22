<?php
    include "../controller/PdvC.php";
    include_once '../Model/Pdv.php';

	$pdvC = new pdvC();
	$error = "";

    // create an instance of the controller
    $pdvC = new pdvC();
    if (
        isset($_POST["adresse_pdv"]) && 
        isset($_POST["nom_pdv"]) &&
        isset($_POST["nb_employee"])
    ) {
        if (
            !empty($_POST["adresse_pdv"]) && 
            !empty($_POST["nom_pdv"]) && 
            !empty($_POST["nb_employee"]) 
        ) {echo ["id_pdv"];
            $pdv = new pdv(
                $_POST['adresse_pdv'],
                $_POST['nom_pdv'], 
                $_POST['nb_employee']
            );
            
            $pdvC->modifierpdv($pdv, $_GET['id_pdv']);
            //header('Location:afficherpdv.php');
        }
        else
            $error = "Missing information";
	}

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
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id_pdv'])){
				$pdv = $pdvC->recupererpdv1($_GET['id_pdv']);
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>Modifier PDV</td>
                    <td>
                        <label for="nom">Adresse PDV:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20" value = "<?php echo $pdv->adresse_pdv; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Nom Point de vente:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" maxlength="20" value = "<?php echo $pdv->nom_pdv; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="email">Nb employe:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="email" id="email"  value = "<?php echo $pdv->nb_employee; ?>">
                    </td>
                </tr>
               
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>
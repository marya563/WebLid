<?php
    include_once '../Model/Pdv.php';
    include_once '../Controller/PdvC.php';

    $error = "";

    // create user
    $p = null;

    // create an instance of the controller
    $pC = new pdvC();
    if (
        isset($_POST["adresse_pdv"]) && 
        isset($_POST["nom_pdv"]) &&
        isset($_POST["nb_employee"])
    ) {
        if (
            !empty($_POST["adresse_pdv"]) && 
            !empty($_POST["nom_pdv"]) && 
            !empty($_POST["nb_employee"]) 
        ) {
            $p = new pdv(
                $_POST['adresse_pdv'],
                $_POST['nom_pdv'], 
                $_POST['nb_employee']
            );
            $pC->ajouterpdv($p);
            header('Location:afficherpdv.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherpdvs.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="adresse_pdv">Adresse:
                        </label>
                    </td>
                    <td><input type="text" name="adresse_pdv" id="adresse_pdv" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nom_pdv">   Nom Point de vente:
                        </label>
                    </td>
                    <td><input type="text" name="nom_pdv" id="nom_pdv" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="nb_employee">Nombre Employee:
                        </label>
                    </td>
                    <td>
                        <input type="nb_employee" name="nb_employee" id="nb_employee" >
                    </td>
                </tr>
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
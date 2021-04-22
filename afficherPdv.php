<?PHP
	include "../controller/PdvC.php";

	$PdvC=new PdvC();
	$listepdv=$PdvC->afficherpdv();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Utilisateurs </title>
    </head>
    <body>
		<button><a href="connexion.php">Ajouter un Point de vente </a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id_pdvv</th>
				<th>adreesse</th>
				<th>nompointdv</th>
				<th>nombreempoyee</th>
				<th>supprimer</th>
				<th>modifier</th>
			</tr>

			<?PHP
				foreach($listepdv as $pdv){
			?>
				<tr>
					<td><?PHP echo $pdv['id_pdv']; ?></td>
					<td><?PHP echo $pdv['adresse_pdv']; ?></td>
					<td><?PHP echo $pdv['nom_pdv']; ?></td>
					<td><?PHP echo $pdv['nb_employee']; ?></td>
					<td>
						<form method="POST" action="supprimerpDV.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $pdv['id_pdv']; ?> name="id_pdv">
						</form>
					</td>
					<td>
						<a href="modifierPdv.php?id_pdv=<?PHP echo $pdv['id_pdv']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>

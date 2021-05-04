<?PHP
	include "lieuC.php";
	

	$lieuC=new lieuC();
	
	if (isset($_POST["id"])){
		$lieuC->supprimerlieu($_POST["id"]);
		header('Location:tables.php');
	}

	
?>


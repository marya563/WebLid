<?PHP
	include "evenementC.php";
	

	$evenementC=new evenementC();
	
	if (isset($_POST["id"])){
		$evenementC->supprimerevenement($_POST["id"]);
		header('Location:tables.php');
	}

	
?>


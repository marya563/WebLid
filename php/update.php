<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM produits WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$article = validate($_POST['article']);
	$nomarticle = validate($_POST['nomarticle']);
    $categoriearticle = validate($_POST['categoriearticle']);
     $commentaireblog = validate($_POST['commentaireblog']);

	$id = validate($_POST['id']);

	if (empty($article)) {
		header("Location: ../update.php?id=$id&error=article is required");
	}else if (empty($nomarticle)) {
		header("Location: ../update.php?id=$id&error=nomarticle is required");
        }else if (empty($categoriearticle)) {
		header("Location: ../update.php?id=$id&error=categoriearticle is required");
        }else if (empty($commentaireblog)) {
		header("Location: ../update.php?id=$id&error=commentaireblog is required");
        
	}else {

       $sql = "UPDATE produits
               SET article='$article', nomarticle='$nomarticle', categoriearticle='$categoriearticle', commentaireblog='$commentaireblog'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}
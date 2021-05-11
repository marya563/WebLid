<?php 

if (isset($_POST['create'])) {
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
	

	$user_data = 'article='.$article. 'nomarticle='.$nomarticle. 'categoriearticle='.$categoriearticle. 'commentaireblog='.$commentaireblog;

	if (empty($article)) {
		header("Location: ../index.php?error=arcticle is required&$user_data");
	}else if (empty($nomarticle)) {
		header("Location: ../index.php?error=nomarticle date is required&$user_data");
	}else if (empty($categoriearticle)) {
			header("Location: ../index.php?error=categoriearticle is required&$user_data");
	}else if (empty($commentaireblog)) {
		header("Location: ../index.php?error=commentaireblog is required&$user_data");			
	
	
	}else {

       $sql = "INSERT INTO produits (article, nomarticle, categoriearticle, commentaireblog) 
               VALUES('$article', '$nomarticle', '$categoriearticle', '$commentaireblog')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully sended");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}
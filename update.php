<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="article">article</label>
		     <input type="text" 
		           class="form-control" 
		           id="article" 
		           name="article" 
		           value="<?=$row['article'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="nomarticle">nomarticle</label>
		     <input type="text" 
		           class="form-control" 
		           id="nomarticle" 
		           name="nomarticle" 
		           value="<?=$row['nomarticle'] ?>" >
		   </div>


		   <div class="form-group">
		     <label for="categoriearticle">categoriearticle</label>
		     <input type="text" 
		           class="form-control" 
		           id="categoriearticle" 
		           name="categoriearticle" 
		           value="<?=$row['categoriearticle'] ?>" >
		   </div>

		 
               
		   <div class="form-group">
		     <label for="commentaireblog">commentaireblog</label>
		     <input type="text" 
		           class="form-control" 
		           id="commentaireblog" 
		           name="commentaireblog" 
		           value="<?=$row['commentaireblog'] ?>" >
		   </div>


	


		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>
		    <a href="read.php" class="link-primary">View</a>
	    </form>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exo Ntier</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
<body>
	<div class="container">
		<h1>Ajouter un article</h1>
		<form action="" method="post">
			<div class="form-group">
				<label for="titre">Le titre </label>
				<input class='form-control' type="text" name="title" />
			</div>
		 	<div class="group-form">
		 		<label for="describe">la description</label>
		 		<input class='form-control' type="text" name="describe" />
		 	</div>
		 	<div class="group-form">
		 		<label for="resume">résume</label>
		 		 <textarea class='form-control' name="body"></textarea> 
		 	</div>
		 	<select class='form-control' name="author">
		 	<?php 
			foreach  ($data as $row) { 
				echo "<option value='".$row['id']."'>".$row['nom']."</option>";
			 }
		 	?>
			</select>
	 		<p>
	 		<input class='btn btn-primary' type="submit" value="OK" name="submit"></p>
	 		<a class='btn btn-primary' href="./lister.traitement.php"> <i class="glyphicon glyphicon-chevron-left" aria-hidden="true"></i>Back to liste</a>

		</form>
	</div>
</body>
</html>








   


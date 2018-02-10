<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exo Ntier</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1><? echo 'Bonjour ! <b>' . $username; ?></b></h1>
		<h2>Liste des articles</h2>
		 <p>Bienvenue sur la liste des articles . Bonne recherche!</p>
		   <a class='btn btn-primary' href='./ajouter.traitement.php'>Ajouter un auteur</a>	<br>
		   <table class="table" >
			   	<thead>
		   			<tr>
					    <th>Titre</th>
					    <th>Description</th> 
					    <th>corps</th>
					    <th>Nom auteur</th>
					    <th>Prénom auteur</th>
					</tr>

			   	</thead>
			   	<tbody>
			   		<?php foreach  ($data as $row) { ?>
					<tr>
				        <? echo "<td>".$row['titre']."</td>" ;?>
				        <? echo  "<td>".$row['description']."</td>" ;?>
				        <? echo  "<td>".$row['corps']."</td>"  ;?>
				        <? echo  "<td>".$row['nom']."</td>"  ;?>
				        <? echo  "<td>".$row['prenom']."</td>"  ;?>
			        </tr>
					<?php
				         } 
				    ?>
			   	</tbody>
		    </table>
	</div>
</body>
</html>

    
	 
	

 


<h1><? echo 'Bonjour ! <b>' . $username; ?></b></h1>
<h2>Liste des articles</h2>
 <p>Bienvenue sur la liste des articles . Bonne recherche!</p>
   <table >
		<tr>
		    <th>Titre</th>
		    <th>Description</th> 
		    <th>corps</th>
		    <th>Nom auteur</th>
		    <th>Prénom auteur</th>
		</tr>
  	<?php foreach  ($db->query($sql) as $row) { ?>
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
    </table>
    
	   <a href='/dashboard/app-ex-mvc-V2/se-deconnecter.traitement.php'>Se deconnecter</a> 
	   <a href='/dashboard/app-ex-mvc-V2/ajouter.traitement.php'>Ajouter un auteur</a>
    
	 
	

 

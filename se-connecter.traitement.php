<?php
	session_start(); 

	if(isset($_POST['submit'])){ 
		include('./se-connecter.bdd.php');
		$results = signin();
		$_SESSION['user']= $results[0]['nom'] . ' ' . $results[0]['prenom'];
	 	header('Location: /dashboard/app-ex-mvc-V3/lister.traitement.php');
	}
	include('./se-connecter.php');
?>
<?php
	session_start(); 

	if(isset($_POST['submit'])){ 
		$mail = $_POST['email'];
		$password = $_POST['pwd'];

		$user = 'root';
		$pass = '';
		$your_db = 'bdd-library';
		try {
		 	$db = new PDO('mysql:host=localhost;dbname='.$your_db.';charset=UTF8', $user, $pass);
		    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 }
		catch( PDOException $e) {
		    echo 'Échec lors de la connexion : ' . $e->getMessage();
		}

		$statement=$db->prepare("SELECT nom , prenom FROM auteur  where  email ='".$mail."' AND password='".$password."' ");
		$statement->execute();
		$results=$statement->fetchAll(PDO::FETCH_ASSOC);
		$_SESSION['user']= $results[0]['nom'] . ' ' . $results[0]['prenom'];
		
	 	header('Location: /dashboard/app-ex-mvc-V2/lister.traitement.php');

	}
	include('./se-connecter.php');
?>
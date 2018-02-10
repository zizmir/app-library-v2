<?php
function signin(){
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
		
		$statement=$db->prepare("SELECT nom , prenom FROM auteur  where  email = :email AND password = :password ");
		$statement->bindValue(':email', $mail, PDO::PARAM_STR);
		$statement->bindValue(':password', $password , PDO::PARAM_STR);
		$statement->execute();

		$results=$statement->fetchAll(PDO::FETCH_ASSOC);
		return $results;
}
?>	
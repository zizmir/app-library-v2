<?php

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

$sql = "SELECT nom , id FROM auteur";
	 
if(isset($_POST['submit'])){ 

	$statement=$db->prepare("INSERT INTO articles (`titre`, `description`, `corps`, `id_auteur`) VALUES ('".$_POST['title']."','".$_POST['describe']."','".$_POST['body']."','".$_POST['author']."')");
	$statement->execute();

}   
	include('./ajouter.php');
?>
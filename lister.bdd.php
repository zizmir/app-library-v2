<?php
function liste(){
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

    $sql =  'SELECT ar.titre, ar.description, ar.corps , au.nom , au.prenom FROM articles ar LEFT JOIN auteur au on  au.id = ar.id';
    $data = $db->query($sql);
    
    return $data;


}


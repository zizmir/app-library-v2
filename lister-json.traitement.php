 <?php
    session_start(); 

	if(!isset($_SESSION['user'])){
		header('Location: /dashboard/app-ex-mvc-V3/error.php');
	}
 	else{
 		include('./lister.bdd.php');
 		$results = liste();
		$json=json_encode($results);
		include('./lister-json.php');
	}

?>
   
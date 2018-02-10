<?
    session_start(); 


	 if(!isset($_SESSION['user']))
	 {
	 	header('Location: /dashboard/app-ex-mvc-V2/error.php');
	 }
 	else{
 		include('./lister.bdd.php');

 		$data = liste();
	 	$username = $_SESSION['user'];
	 	include('./lister.php');
 	}

 	?>
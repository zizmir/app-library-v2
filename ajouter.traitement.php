<?php
session_start(); 

if(!isset($_SESSION['user'])){
	header('Location: /dashboard/app-ex-mvc-V3/error.php');
}else{
	include('./ajouter.bdd.php');
	$data = allAuthor();

		 
	if(isset($_POST['submit'])){ 
		$dataAuthor = addAuthor();
	}   
	include('./ajouter.php');



}

?>
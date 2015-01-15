<?php
Session_start();

if(!empty($_POST['erase_id']) AND !empty($_POST['erase_name']) ){

	include 'connexion_PDO.php';

	echo $_POST['erase_id'];
	
	$erase_id = $_POST['erase_id'];
	$erase_name = $_POST['erase_name'];
	
	$sth = $connexion->exec("DELETE FROM city WHERE City_id = '$erase_id' ");



	$_SESSION['Message'] = "La ville a bien été rasée!";
	header('Location: /City-Manager/erasecity');

	

}else{

	$_SESSION['Message'] = "Erreur";
	header('Location: /City-Manager/erasecity');
	

}

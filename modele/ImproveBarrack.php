<?php
Session_start();


if(!empty($_POST['city_id']) AND !empty($_POST['city_name']) AND !empty($_POST['cost']) AND !empty($_POST['money'])){

	if ($_POST['money'] >= $_POST['cost']){

		include 'connexion_PDO.php';

		$pseudo = $_SESSION['Player_pseudo'];
		$cost = $_POST['cost'];
		$name = $_POST['city_name'];
		$city_id = $_POST['city_id'];
		
		$sth = $connexion->exec("UPDATE city SET Gold = (Gold - $cost) WHERE City_id = $city_id");
		
		$sth2 = $connexion->exec("UPDATE city SET Barracks = (Barracks + 1) WHERE City_id = $city_id");
		
		$sth3 = $connexion->exec("UPDATE city SET Soldiers_s = (Soldiers_s * 2)  WHERE City_id = $city_id");
		
		$connexion->exec("INSERT INTO news VALUES ('', '$name : amélioration','La caserne a été améliorée !',NOW());");
		
		
		$_SESSION['Message'] = "La caserne a été améliorée !";
		echo "check ok";
		echo " ".$_POST['city_id']." ".$_POST['city_name']." ".$_POST['cost']." ".$_POST['money'];
		header('Location: /City-Manager/'.$pseudo.'/'.$name);
	
	}else{
	
	$_SESSION['Message'] = "Or insuffisant pour effectuer cette opération !";;
		
		echo "check pas assez d'or";
		$pseudo = $_SESSION['Player_pseudo'];
		$name = $_POST['city_name'];
	header('Location: /City-Manager/'.$pseudo.'/'.$name);
	}



}else{
	echo "check faux";
	header('Location: /City-Manager/');
}








?>
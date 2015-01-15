<?php

include 'connexion_PDO.php';

$Player_id = $_SESSION['Player_id'];

include "connexion_PDO.php";
$req=$connexion->prepare('SELECT * FROM city WHERE User_id=:id ' );
$req->execute(array('id'=>$City_id));
$cities=$req->fetchAll();

foreach ($cities as $city){

	$citygold = $city['Gold'];
	$gold_s = $city['Gold_s'];
	$factory = $city['Factory'];
	
	
	$soldier = $city['Soldiers'];
	$soldier_s = $city['Soldiers_s'];
	$barrack = $city['Barracks'];
	
	$costFactory = 50* 3*$factory = $city['Factory'];
	$costBarrack = 50* 3*$factory = $city['Factory'];
}



;?>
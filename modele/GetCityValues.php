<?php



$Player_id = $_SESSION['Player_id'];

include "connexion_PDO.php";

$req=$connexion->prepare('SELECT * FROM city WHERE City_id=:id ' );
$req->execute(array('id'=>$City_id));
$cities=$req->fetchAll();



foreach ($cities as $city){

	

	$Citygold = $city['Gold'];
	$gold_s = $city['Gold_s'];
	$factory = $city['Factory'];
	$gold = $city['Gold'];
	$life = $city['life'];
	$wall = $city['Wall'];
	
	$soldier = $city['Soldiers'];
	$soldier_s = $city['Soldiers_s'];
	$barrack = $city['Barracks'];
	
	$costFactory = (300*$factory ) *$factory +100;
	$costBarrack = (300*$barrack )*$barrack + 200;
	$costWall = (300*$wall )*$wall +300;
	
	$lastco = $city['lastco'];
}

	$now = strtotime(date("Y-m-d H:i:s"));

	$datediff = $now - strtotime($lastco);
	
	$golddiff = $datediff*$gold_s;
	$soldierdiff = $datediff*$soldier_s;
	
	
	$newgold = $gold + $golddiff;
	$newsoldier = $soldier + $soldierdiff;
	
	$sth = $connexion->exec("UPDATE city SET Gold = $newgold WHERE City_id= $City_id");
	$sth = $connexion->exec("UPDATE city SET Soldiers = $newsoldier WHERE City_id= $City_id");

	$sth2 = $connexion->exec("UPDATE city SET lastco = NOW() WHERE City_id= $City_id");
	
	$gold = (int)$newgold;
	$soldier = (int)$newsoldier;
;?>
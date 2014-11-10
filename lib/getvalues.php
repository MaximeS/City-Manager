<?php

include '../include/connexion_PDO'

function getgold ($cityid)
{
	private $requete;
	private $result;
	$requete = $connexion->prepare("SELECT Gold FROM city WHERE City_id = '%$cityid%' ");
	$result -> $requete->execute();
	return $result;
	
}

function getsoldier ($cityid)
{
	private $requete;
	private $result;
	$requete = $connexion->prepare("SELECT Soldier FROM city WHERE City_id = '%$cityid%' ");
	$result -> $requete->execute();
	return $result;
	
}

function getsoldier_s ($cityid)
{
	private $requete;
	private $result;
	$requete = $connexion->prepare("SELECT Soldier_s FROM city WHERE City_id = '%$cityid%' ");
	$result -> $requete->execute();
	return $result;
	
}

function getgold_s ($cityid)
{
	private $requete;
	private $result;
	$requete = $connexion->prepare("SELECT Gold_s FROM city WHERE City_id = '%$cityid%' ");
	$result -> $requete->execute();
	return $result;
	
}

$cityid = //variable session

echo 
"
	<div id=gold>
		getgold($cityid);
	</div>
	<div id=gold_s>
		getgold_s($cityid);
	</div>
	<div id=soldier>
		getsoldier($cityid);
	</div>
	<div id=soldier_s>
		getsoldier_s($cityid);
	</div>
	
"

?>
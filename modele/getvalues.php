<?php

include '../include/connexion_PDO.php';

function getniveau ($cityid, $connexion, $name)
{
	$requete = $connexion->prepare("SELECT '%name' FROM city WHERE City_id = '%$cityid%' LIMIT 1");
	$requete->execute();
	$result = $requete->fetch();
	return $result['%name%'];
}

function getgold ($cityid, $connexion)
{
	$requete = $connexion->prepare("SELECT Gold FROM city WHERE City_id = '%$cityid%' LIMIT 1");
	$requete->execute();
	$result = $requete->fetch();
	return $result['Gold'];
	
}

function getsoldier ($cityid, $connexion)
{
	$requete = $connexion->prepare("SELECT Soldier FROM city WHERE City_id = '%$cityid%' LIMIT 1");
	$requete->execute();
	$result = $requete->fetch();
	return $result[0];
	
}

function getsoldier_s ($cityid, $connexion)
{
	$requete = $connexion->prepare("SELECT Soldier_s FROM city WHERE City_id = '%$cityid%' LIMIT 1");
	$requete->execute();
	$result = $requete->fetch();
	return $result[0];
	
}

function getgold_s ($cityid, $connexion)
{
	$requete = $connexion->prepare("SELECT Gold_s FROM city WHERE City_id = '%$cityid%' LIMIT 1");
	$requete->execute();
	$result = $requete->fetch();
	return $result[0];
	
}

$cityid =1;

echo 
"
<div id='infoscity'>
	<div id='gold'>";
		echo getgold($cityid, $connexion);
echo
"
	</div>
	<div id='gold_s'>";
		echo getgold_s($cityid, $connexion);
echo
"
	</div>
	<div id='soldier'>";
		echo getsoldier($cityid, $connexion);
echo
"
	</div>
	<div id='soldier_s'>";
		echo getsoldier_s($cityid, $connexion);
echo
"
	</div>
</div>
";

?>
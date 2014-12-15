<?php

include '../include/connexion_PDO.php';

function getniveau()
{
	$requete = $connexion->prepare("SELECT :name FROM city WHERE City_id = :city_id LIMIT 1");
	$requete->execute(array('city_id'=>"%".$_SESSION["City_id"]."%","name"=>$name);
	$result = $requete->fetch();
	return $result['Name'];
}

function getgold ()
{
	$requete = $connexion->prepare("SELECT Gold FROM city WHERE City_id = :city_id LIMIT 1");
	$requete->execute(array('city_id'=>"%".$_SESSION["City_id"]."%");
	$result = $requete->fetch();
	return $result['Gold'];
	
}

function getsoldier ()
{
	$requete = $connexion->prepare("SELECT Soldier FROM city WHERE City_id = :city_id LIMIT 1");
	$requete->execute(array('city_id'=>"%".$_SESSION["City_id"]."%");
	$result = $requete->fetch();
	return $result[0];
	
}

function getsoldier_s ()
{
	$requete = $connexion->prepare("SELECT Soldier_s FROM city WHERE City_id = :city_id LIMIT 1");
	$requete->execute(array('city_id'=>"%".$_SESSION["City_id"]."%");
	$result = $requete->fetch();
	return $result[0];
	
}

function getgold_s ()
{
	$requete = $connexion->prepare("SELECT Gold_s FROM city WHERE City_id = :city_id LIMIT 1");
	$requete->execute(array('city_id'=>"%".$_SESSION["City_id"]."%");
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
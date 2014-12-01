<?php

include '../controleur/connexion_PDO.php';
require '../controleur/getvalues.php';

function error()
{
	echo"erreur";
}

function modifiermoney ($cityid, $connexion, $name, $value)
{
	$requete = $connexion->prepare("UPDATE city SET {Gold = {Gold - '%$value%'}}")
	$requete->execute();
}

function modifierniveau ($cityid, $connexion, $name)
{
	$requete = $connexion->prepare("UPDATE city SET {'%$name%' = {'%$name%' + 1}}")
	$requete->execute();
}

function upgrade ($cityid, $connexion, $name)
{
	var $gold = getgold ($cityid, $connexion);
	var $level = getniveau ($cityid, $connexion, $name);
	var $value = ($level+50)*5
	
	if ($gold >= $value)
	{
		modifiermoney ($cityid, $connexion, $name, $value);
		modifierniveau ($cityid, $connexion, $name)
	}
	else
	{
		error();
	}
}

?>
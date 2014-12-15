<?php

include 'connexion_PDO.php';
require 'getvalues.php';

function error()
{
	echo"erreur";
}

function modifiermoney ($value)
{
	$requete = $connexion->prepare("UPDATE city SET (Gold = (Gold - :value)) WHERE City_id=:city_id")
	$requete->execute(array('value'=>$value,'city_id'=> $_SESSION['City_id']);
}

function modifierniveau ($building)
{
	$requete = $connexion->prepare("UPDATE city SET (:building = (:building + 1)")
	$requete->execute(array('building'=>$building));
}

function upgrade ($building)
{
	var $gold = getgold ($connexion);
	var $level = getniveau ($building);
	var $value = ($level+50)*5
	
	if ($gold >= $value)
	{
		modifiermoney ($value);
		modifierniveau ($name)
		
	}
	else
	{
		error();
	}
}

?>
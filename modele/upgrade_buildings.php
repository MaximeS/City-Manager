<?php

include 'connexion_PDO.php';
require 'getvalues.php';

public function error()
{
	echo"erreur pas assez d'argent.";
}

public function modifiermoney ($value)
{
	$requete = $connexion->prepare("UPDATE city SET (Gold = (Gold - :value)) WHERE City_id=:city_id")
	$requete->execute(array('value'=>$value,'city_id'=> $_SESSION['City_id']);
}

public function modifierniveau ($building)
{
	$requete = $connexion->prepare("UPDATE city SET (:building = (:building + 1)")
	$requete->execute(array('building'=>$building));
}

public function upgrade ($building)
{
	var $gold = getgold ($connexion);
	var $level = getniveau ($building);
	if($level>0){
		var $value = ($level*50)*3*$level;
	}
	else{
		var $value=50;
	}
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
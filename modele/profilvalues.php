<?php

	include 'connexion_PDO.php';


	function totalgold($id, $connexion) {
	
		$totalgold = 0;
	
		$sql = $connexion->prepare("SELECT Gold FROM city WHERE User_id = '$id'");
		$sql->execute();
		$result = $sql->fetchAll();
		
		foreach($result as $city){
		
		$totalgold += $city['Gold'];
		
		}
	
		return $totalgold;
	
	}
	
	function totalsoldier($id, $connexion) {
	
		$totalgold = 0;
	
		$sql = $connexion->prepare("SELECT Soldiers FROM city WHERE User_id = '$id'");
		$sql->execute();
		$result = $sql->fetchAll();
		
		foreach($result as $city){
		
		$totalgold += $city['Soldiers'];
		
		}
	
		return $totalgold;
	
	}



?>
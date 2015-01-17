<?php

require 'modele/connexion_PDO.php';

if(!empty($pseudo) AND  !empty($City))
{	
	$sth = "SELECT * FROM user WHERE Pseudo = '$pseudo'";
	
	$sql = $connexion->prepare("SELECT * FROM user WHERE Pseudo = '$pseudo'");
	$sql->execute();
	$result = $sql->fetchAll();
	
	$count = count($result);
	
	if ($count>0)
	{
		
		foreach  ($connexion->query($sth) as $row) {
		
			$User_id = $row['User_id'];
			$Pseudo = $row['Pseudo'];
			
		}
		
		$sth = "SELECT * FROM city WHERE User_id = '$User_id'";
		
		$sql = $connexion->prepare("SELECT * FROM city WHERE User_id = '$User_id'");
		$sql->execute();
		$result = $sql->fetchAll();
	
		$count = count($result);
	
		if ($count>0)
		{
			foreach  ($connexion->query($sth) as $row2) {
			
				if ($row2['Name'] == $City)
				{
					$City_name = $row2['Name'];
					$City_id = $row2['City_id'];
					
										
					include "vue/lib/City.php";
				}
		
			
				
			}
		}else{
		
			include "vue/lib/NoCity.php"; 
		}
		 
	
	}else{
	
		include "vue/lib/NoProfil.php"; 
	
	}
	
	
	
}else{

	echo "pas de variables !";

} 
	
?>	
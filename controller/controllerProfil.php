<?php

require 'modele/connexion_PDO.php';

if (!empty($_SESSION['Player_id'])){

if(!empty($pseudo))
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
		
	
		include "vue/lib/Profil.php"; 
	
	}else{
	
		include "vue/lib/NoProfil.php"; 
	
	}

}	
}else{



}	
	
	
?>	
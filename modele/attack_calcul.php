<?php
Session_start();
include 'connexion_PDO.php';
	
	$AtCity = $_POST['Attacking_City'];
	
	echo "// ".$_POST['MaxSoldiers'];
	
	$ACity = $_POST['Attacked_City'];
	
	$AHP = $_POST['Attacked_HP'];
	
	$Asol = $_POST['Attacked_Soldiers'];
	
	$AtNb = $_POST['SelectNb'];
	
	
	
	if (!empty($_POST['SelectNb'])){
	
		if ($_POST['SelectNb'] <= $_POST['MaxSoldiers']){
		
			if ($_POST['SelectNb'] <= $_POST['Attacked_Soldiers']){
			
				$left = $Asol - $AtNb;
				
				$connexion->exec("UPDATE city SET Soldiers = (Soldiers - '$AtNb') WHERE Name = '$AtCity'");
				$connexion->exec("UPDATE city SET Soldiers = '$left' WHERE Name = '$ACity'");
				
				$connexion->exec("INSERT INTO news VALUES ('', '$ACity : attaquée !','$AtCity a lancé une attaque sur $ACity !',NOW());");
				
				$_SESSION['Message'] = 'La bataille est un succès ! vous avez éliminé '.$AtNb.' Soldats ennemis !';
		
				header('Location: /City-Manager/');
			
			}
			if ($_POST['SelectNb'] > $_POST['Attacked_Soldiers']){
			
				$left = $AtNb - $Asol;
				
				$LifeLeft = $AHP - $left;
				
				if ($LifeLeft > 0){
				
					$connexion->exec("UPDATE city SET Soldiers = (Soldiers - '$AtNb') WHERE Name = '$AtCity'");
					$connexion->exec("UPDATE city SET Soldiers = 0 WHERE Name = '$ACity'");
					$connexion->exec("UPDATE city SET life = '$LifeLeft' WHERE Name = '$ACity'");
					
					$connexion->exec("INSERT INTO news VALUES ('', '$ACity : attaquée !','$AtCity a lancé une attaque sur $ACity !',NOW());");
				
					$_SESSION['Message'] = 'La bataille est un succès ! vous avez éliminé tous les Soldats ennemis et retiré '.$left.' points de vie à leur ville !';
					
		
					header('Location: /City-Manager/');
				
				}else{
				
					$connexion->exec("UPDATE city SET Soldiers = (Soldiers - '$AtNb') WHERE Name = '$AtCity'");
					$connexion->exec("DELETE FROM city WHERE Name = '$ACity'");
					
					$connexion->exec("INSERT INTO news VALUES ('', '$ACity : Détruite !','$AtCity a lancé une attaque sur $ACity et l\'a réduite en  cendres !',NOW());");
				
					$_SESSION['Message'] = 'La bataille est un succès ! vous avez éliminé tous les Soldats ennemis et détruit leur ville !';
					
		
					header('Location: /City-Manager/');
				
				
				}
			
			
			}
			
		
		}else{
		
			$_SESSION['Message'] = "vous ne disposez pas d\'assez de soldats";
		
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		
		}
	
	}else{
	
		$_SESSION['Message'] = "veuillez préciser la taille de votre armée";
		
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	
	}
	
	
	
	
	
<link rel="stylesheet" media="screen" type="text/css" href="../css/general.css"/>

<?php
			include "modele/connexion_PDO.php";
			
	$City_attacking = $City;
	
	
	
	$sth = $connexion->prepare('SELECT * FROM city WHERE Name = :name' );
	$sth->execute(array('name'=>$City_attacking));
	$AttackingInfo = $sth->FetchAll();

	foreach ($AttackingInfo as $row){
		
		$MaxSoldiers = $row['Soldiers'];
		$MaxHP = $row['life'];
	
	}

?>



<div class="PageName">
	<h1> Attaque </h1>
</div>

<div class="container">

	</br>
		<h1> choisissez votre cible </h1>

	</br>

	<?php

	
		$Player_id = $_SESSION['Player_id'];

	

		
		$sql = $connexion->prepare('SELECT Pseudo, User_id FROM user WHERE User_id != :id   ORDER BY Pseudo' );
		$sql->execute(array('id'=>$Player_id));
		$players = $sql->fetchAll();
		
		foreach($players as $player){
		
			echo "<div class='cityInfo'> 
					<h1>".$player['Pseudo']."</h1>
					";
			
			$user_id = $player['User_id'];
			
			$sql2 = $connexion->prepare('SELECT * FROM city WHERE User_id = :id ORDER BY Name ' );
			$sql2->execute(array('id'=>$user_id));
			$cities = $sql2->fetchAll();
			
			foreach($cities as $city){
			
				echo "<div class='info'>
						<form method='POST' action='../../modele/attack_calcul.php'>
						<h2>".$city['Name']."</h2>
						HP: ".$city['life']."</br>
						Soldats: ".$city['Soldiers']."</br></br>
						
						Combien de soldats désirez vous envoyer ? (max: ".$MaxSoldiers.")</br></br> 
						<input type='number' name='SelectNb' id='SelectNb'> </br></br>
						<input type='hidden' name='MaxSoldiers' value='".$MaxSoldiers."'>
						<input type='hidden' name='Attacked_City' value='".$city['Name']."'>
						<input type='hidden' name='Attacked_HP' value='".$city['life']."'>
						<input type='hidden' name='Attacked_Soldiers' value='".$city['Soldiers']."'>
						<input type='hidden' name='Attacking_City' value='".$City_attacking."'>
						
						<input type='submit' value='attaquer !'>
						</br></br>
						
						</div></br></form></br>";
			
			}
			
			echo "</br></br></form></div> </br></br>";
		}
	
	
	?>
		

</div>

<div class="leftmenuB">

	<h1> Votre ville : </h1>
	<h2> <?php echo $City_attacking; ?> </h2>
	<b>HP : </b> <?php echo $MaxHP; ?> </br></br>
	<b> Soldats : </b><?php echo $MaxSoldiers; ?>


</div>
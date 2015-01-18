<link rel="stylesheet" media="screen" type="text/css" href="../css/general.css"/>

<div class="PageName">
	<h1> Attaque </h1>
</div>

<div class="container">

	</br>
		<h1> choisissez votre cible </h1>
	</br>

	<?php

	
		$Player_id = $_SESSION['Player_id'];

	
		include "modele/connexion_PDO.php";
		
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
						<form method='POST'>
						<h2>".$city['Name']."</h2>
						HP: ".$city['life']."</br>
						Soldats: ".$city['Soldiers']."</br></br>
						
						Combien de soldats désirez vous envoyer ? (max: )</br></br> 
						<input type='text' name='NbSoldiers'></br></br>
						<input type='submit' value='attaquer !'>
						</br></br>
						
						</div></br></br>";
			
			}
			
			echo "</br></br> </form> </div> </br></br>";
		}
	
	
	?>
		

</div>
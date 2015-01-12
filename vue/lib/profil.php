<h1> Vous êtes sur le profil de <?php echo $Pseudo ?> ! </h1>

<?php
include "../../modele/profil.php";
foreach ($cities as $city) {
	echo "<div>".$city['Name']."<br>"
	.$city['Gold_S']."<br>"
	.$city['Soldier_S']."<br>"
	."<form method="POST" action='/City-Manager/".$_SESSION['Player_Pseudo']."'>
	<input type="hidden" value='".$city['City_id']."' name="city_id">
	<input type="submit" value="Voir"> "

	}
;?>
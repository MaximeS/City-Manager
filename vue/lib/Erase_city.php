<meta charset="UTF-8">


	<fieldset>
	</br>
	</br>
	<legend><h2>Raser une ville</h2></legend>
	<p>
	choisissez une ville à détruire : </br> </br>
	
	<?php
	
		include "modele/profil.php";
foreach ($cities as $city) {
	
	$cityname = $city['Name'];
	$pseudo = $_SESSION['Player_pseudo'];
	$city_id = $city['City_id'];
	

	echo "<form method='POST' action='modele/Erase_city.php'> <div class='citydiv'> <h2><u>".$cityname."</u></h2><br> <b> Or </b> : "
	.$city['Gold']."<br> <b> Soldats </b> : "
	.$city['Soldiers']."<br> <b> Or par secondes : </b>  "
	.$city['Gold_s']."<br> <b> Soldats par secondes : </b>  "
	.$city['Soldiers_s']."<br> </br>
	<input type='hidden' name='erase_id' value ='$city_id'>
	<input type='hidden' name='erase_name' value ='$cityname'>
	<input type='submit' value='détruire !'>
	</br></br> </div> </form>"
	
	
	
	."</h3></div></a> <br><br>";

}
	
	
	
	
	
	
	
	
	
	
	?>
	
	
	
	<?php
	

if (!empty($_SESSION['Message'])){
	
		$message = $_SESSION['Message'];
		echo "<script> alert('$message'); </script>";
		
		unset($_SESSION['Message']);
	}	
	
?>
	
	
	
	</fieldset>
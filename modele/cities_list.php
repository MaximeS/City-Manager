

<fieldset>

<legend><h2> Vos villes </h2></legend>


<?php



include 'connexion_PDO.php';

$sql = "SELECT * FROM city WHERE User_id = '$Player_id'";
	
		foreach  ($connexion->query($sql) as $row) {
		
		
		 echo $row['Name'] . "</br>";
			
		
		}




?>

</fieldset>
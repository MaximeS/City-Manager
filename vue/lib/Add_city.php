<meta charset="UTF-8">

<form method="post" action="modele/add_city.php" >
	<fieldset>
	<legend><h2>Créer une nouvelle ville</h2></legend>
	<p>
	<label for="new_city_name">Nom de la nouvelle ville :</label> </br> <input name="new_city_name" type="text" id="new_city_name" /></br> </br>
	
	
	</br>
	<p><input type="submit" value="Créer !" /></p></form>
	
	
	
	</fieldset>
	
	
<?php

if(!empty($_POST['new_city_name']) AND isset($_POST['new_city_name']) )
{
	
		$name = ($_POST['new_city_name']);
		
		include 'connexion_PDO.php';
	
		$connexion->exec("INSERT INTO city VALUES ('', '$name','500','0','0','0','','0','1','0','$Player_id');");
		
		



	

	
	
	


}
	

	/*Penser à séparer en deux fichiers */
?>

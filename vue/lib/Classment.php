<?php
	include '../../modele/connexion_PDO'
	
	$classment -> prepare("SELECT Name FROM city ORDER BY DESC Gold_s");
	$classment -> execute

?>
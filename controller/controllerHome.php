<?php
Session_Start();

	if (!empty($_SESSION['Player_id'])) {	
	
		$Player_id = $_SESSION['Player_id'];
		
		include "vue/lib/HomePage.php";
		
	
	
	} else {
	
		include "vue/lib/Connexion.php";
	
	}
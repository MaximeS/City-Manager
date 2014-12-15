<?php

include '../../controleur/City_Screen_Controleur'

//ici sera inséré la vue -> uniquement la vue et affichera via img src suivant si les fonction seront true or false

if (Display_Factory() == true)
	{
			echo "<img src="../images/Factory.jpg"/>";
	}

if (Display_Barracks() == True;)
	{
		echo "<img src="../images/Barracks.jpg"/>";
	}

if (Display_Wall() == True;)
	{
		echo "<img src="../images/Wall.jpg"/>";
	}	

if (Display_Spy_Barracks() == True)
	{
		echo "<img src="../images/Spy_Barracks.jpg"/>";
	}	
?>
<?php

include '../../controleur/City_Screen'

//ici sera inséré la vue -> uniquement la vue et affichera via img src suivant si les fonction seront true or false

if ($IsFactory == True)
	{
			echo "<img src="../images/Factory.jpg"/>";
	}

if ($IsBarracks == True;)
	{
		echo "<img src="../images/Barracks.jpg"/>";
	}

if ($IsWall == True;)
	{
		echo "<img src="../images/Wall.jpg"/>";
	}	

if ($IsSpy_Barracks == True)
	{
		echo "<img src="../images/Spy_Barracks.jpg"/>";
	}	
?>
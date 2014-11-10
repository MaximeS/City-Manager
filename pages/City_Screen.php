<?php

	$stockfactory = $connexion ->prepare("SELECT Factory FROM city WHERE City_id = '%city_id%' ");
	$sqlfactory = $stockfactory -> execute ();
	$stockbarracks  = $connexion ->prepare("SELECT Barracks FROM city WHERE City_id = '%city_id%' ");
	$sqlbarracks = $stockbarracks -> execute ();
	$stockwall = $connexion ->prepare("SELECT Wall FROM city WHERE City_id = '%city_id%' ");
	$sqlwall = $stockwall -> execute ();
	$stockspybarracks = $connexion ->prepare("SELECT Spy_Barracks FROM city WHERE City_id = '%city_id%' ");
	$sqlspybarracks = $stockspybarracks -> execute ();
	
	if ($sqlfactory > 0)
	{
		echo "<img src="../image/Factory.jpg"/>"
	}
	
	if ($sqlbarracks > 0)
	{
		echo "<img src="../image/Barracks.jpg"/>"
	}
	
	if ($sqlwall > 0)
	{
		echo "<img src="../image/Wall.jpg"/>"
	}
	
	if ($sqlspybarracks > 0)
	{
		echo "<img src="../image/Spy_Barracks.jpg"/>"
	}
?>
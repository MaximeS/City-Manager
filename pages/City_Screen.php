<?php

	$sqlfactory = "SELECT Factory FROM city WHERE City_id = '%city_id%' ";
	$sqlbarracks = "SELECT Barracks FROM city WHERE City_id = '%city_id%' ";
	$sqlwall = "SELECT Wall FROM city WHERE City_id = '%city_id%' ";
	$sqlspybarracks = "SELECT Spy_Barracks FROM city WHERE City_id = '%city_id%' ";
	
	if ($sqlfactory > 0)
	{
		echo "<img src="image/Factory.jpg"/>"
	}
	
	if ($sqlbarracks > 0)
	{
		echo "<img src="image/Barracks.jpg"/>"
	}
	
	if ($sqlwall > 0)
	{
		echo "<img src="image/Wall.jpg"/>"
	}
	
	if ($sqlspybarracks > 0)
	{
		echo "<img src="image/Spy_Barracks.jpg"/>"
	}
?>
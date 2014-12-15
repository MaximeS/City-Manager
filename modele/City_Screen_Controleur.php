<?php
/*

	include '../include/connexion_PDO'

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
*/
	include 'connexion_PDO'
	
	public function Display_Factory()
	{
		$IsFactory = False;
		
		$stockfactory = $connexion ->prepare("SELECT Factory FROM city WHERE City_id = :cityid ");
		$sqlfactory = $stockfactory -> execute (array('city_id'=>"%".$_SESSION["City_id"]."%"));
		
		if ($sqlfactory > 0)
		{
			return $IsFactory = True;
		}
	}
	
	public function Display_Barracks()
	{
		$IsBarracks = False;
		
		$stockbarracks  = $connexion ->prepare("SELECT Barracks FROM city WHERE City_id = :cityid ");
		$sqlbarracks = $stockbarracks -> execute ((array('city_id'=>"%".$_SESSION["City_id"]."%");
		if ($sqlbarracks > 0)
		{
			return $IsBarracks = True;
		}
	}
	
	public function Display_Wall()
	{
		$IsWall = False;
		
		$stockwall = $connexion ->prepare("SELECT Wall FROM city WHERE City_id = :cityid ");
		$sqlwall = $stockwall -> execute ((array('city_id'=>"%".$_SESSION["City_id"]."%");
		if ($sqlwall > 0)
		{
			return $IsWall = True;
		}
	}
	
	public function Display_Spy_Barracks()
	{
		$IsSpy_Barracks = False;
		
		$stockspybarracks = $connexion ->prepare("SELECT Spy_Barracks FROM city WHERE City_id = :cityid ");
		$sqlspybarracks = $stockspybarracks -> execute ((array('city_id'=>"%".$_SESSION["City_id"]."%");
		if ($sqlspybarracks > 0)
		{
			return $IsSpy_Barracks = True;
		}
	}
	
?>
<?php

function getgold ($cityid)
{
	$sql = "SELECT Gold FROM city WHERE City_id = '%$cityid%' ";
	return  $sql;
}

function getsoldier ($cityid)
{
	$sql = "SELECT Soldier FROM city WHERE City_id = '%$cityid%' ";
	return $sql;
}

function getsoldier_s ($cityid)
{
	$sql = "SELECT Soldier_s FROM city WHERE City_id = '%$cityid%' ";
	return $sql;
}

function getgold_s ($cityid)
{
	$sql = "SELECT Gold_s FROM city WHERE City_id = '%$cityid%' ";
	return $sql;
}



?>
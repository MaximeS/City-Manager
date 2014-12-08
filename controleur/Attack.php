<?php
function Attack($SoldiersEnvoyer)
{

include 'connexion_PDO.php';
$SoldiersBDD = $connexion->prepare('SELECT Soldiers FROM city WHERE City_id = 2 '); //. $_GET["City_id1"]);
$SoldiersBDD->execute();
$Soldiers2 = $SoldiersBDD->fetch();
$Soldiers = $Soldiers2['Soldiers'];
if ($SoldiersEnvoyer > $Soldiers) 
{
	echo "Vous n'avez pas assez de soldats";
	return 0;
}

$Wall = $connexion->prepare('SELECT Wall FROM city WHERE City_id = 3 ');//. $_GET["City_id2"]);
$Wall->execute();
$Wall2 = $Wall->fetch();
$Wall = $Wall2['Wall'];
echo $Wall .'<br/>';
echo $Soldiers .'<br/>';
$resultat = $Wall - $Soldiers;
if ($resultat >= 0)
{
	$Soldiers = 0;
	$RetourSoldats = $connexion->prepare('UPDATE City SET Soldiers = :Soldiers WHERE City_id = 2'); //.$_GET["City_id1"] );
	$RetourSoldats->execute(array( 'Soldiers' => $Soldiers));
	echo "Vous avez echouez";
	return $Soldiers;
}	
else
{
	$Soldiers = $Soldiers - $Wall;
	echo $Soldiers .'<br/>';
	$RetourSoldats = $connexion->prepare('UPDATE City SET Soldiers = :Soldiers WHERE City_id = 2'); //.$_GET["City_id1"] );
	$RetourSoldats->execute(array( 'Soldiers' => $Soldiers));
	echo "Victoire !!!";
	return $Soldiers;
}
}
Attack(12);

?>
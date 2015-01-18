<?php
function Attack($SoldiersEnvoyer)
{

include 'connexion_PDO.php';
$SoldiersBDD = $connexion->prepare('SELECT Soldiers FROM city WHERE City_id = :city_id '); //. $_GET["City_id1"]);
$SoldiersBDD->execute(array('city_id'=>$_SESSION['City_id']));
$Soldiers2 = $SoldiersBDD->fetch();
$Soldiers = $Soldiers2['Soldiers'];
if ($SoldiersEnvoyer > $Soldiers)
{
	echo "Vous n'avez pas assez de soldats";
	return 0;
}

$Wall = $connexion->prepare('SELECT Wall FROM city WHERE City_id = :city_id ');//. $_GET["City_id2"]);
$Wall->execute(array('city_id'=>$_POST['City_id']));
$Wall2 = $Wall->fetch();
$Wall = $Wall2['Wall'];
$Soldiers2=$connexion->prepare('SELECT Soldiers FROM city WHERE City_id=:city_id');
$Soldiers2->execute(array('city_id' =>$_POST['City_id']);)
$Soldiers2=$Soldiers2->fetch();
$resultat = $Wall + $Soldiers2 - $Soldiers;
if ($resultat >= 0)
{
	$Soldiers = 0;
	$RetourSoldats = $connexion->prepare('UPDATE City SET Soldiers = :Soldiers WHERE City_id = :city_id'); //.$_GET["City_id1"] );
	$RetourSoldats->execute(array( 'Soldiers' => $Soldiers,'city_id'=>$_POST['City_id']));
	echo "Vous avez echoué";
}	
else
{
	$Soldiers = $Soldiers - $Wall+$Soldiers2;
	$RetourSoldats = $connexion->prepare('UPDATE City SET Soldiers = :Soldiers WHERE City_id =:city_id '); //.$_GET["City_id1"] );
	$RetourSoldats->execute(array( 'Soldiers' => $Soldiers,'city_id'=>$_SESSION['City_id']));
	$pertes=$connexion ->prepare('UPDATE City SET Soldiers=0 ,Wall=0,Gold=(Gold/2) WHERE City_id=:city_id');
	$pertes->execute(array('city_id'=$_POST['City_id']));
	$goldperdant=>$connexion->prepare('SELECT Gold FROM City WHERE City_id=:city_id');
	$goldperdant->execute(array('city_id'=>$_POST['City_id']));
	$goldperdant=$goldperdant->fetch();
	$Goldgagnés=$connexion->prepare('UPDATE City SET Gold=Gold+:goldperdant WHERE City_id=:city_id');
	$Goldgagnés->execute(array('city_id'=>$_SESSION['City_id'],'goldperdant'=>$goldperdant));

	echo "Victoire !!!";
}
}

?>
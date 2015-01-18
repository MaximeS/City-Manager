<?php
function Attack($SoldiersEnvoyer)
{
//$_SESSION['City_id']=3;
//$_POST['City_id']=4;
include 'connexion_PDO.php';
$SoldiersBDD = $connexion->prepare('SELECT Soldiers FROM city WHERE City_id = :city_id ');
$SoldiersBDD->execute(array(':city_id'=>$_SESSION['City_id']));
$Soldiers2 = $SoldiersBDD->fetch();
$Soldiers = $Soldiers2['Soldiers'];
<<<<<<< HEAD
if ($SoldiersEnvoyer > $Soldiers)
=======
if ($SoldiersEnvoyer > $Soldiers) 
>>>>>>> 97c68294adb3fada4492246d0cdea79ea84a62da
{
	echo "Vous n'avez pas assez de soldats";
	return 0;
}

$Wall = $connexion->prepare('SELECT Wall FROM city WHERE City_id = :city_id');
$Wall->execute(array('city_id'=>$_POST['City_id']));
$Wall2 = $Wall->fetch();
$Wall = $Wall2['Wall'];
$Soldiers2=$connexion->prepare('SELECT Soldiers FROM city WHERE City_id= :city_id');
$Soldiers2->execute(array('city_id' =>$_POST['City_id']));
$Soldiers2=$Soldiers2->fetch();
$Soldiers2=$Soldiers2['Soldiers'];
$resultat = $Wall + $Soldiers2 - $Soldiers;
if ($resultat >= 0)
{
	$Soldiers = 0;
	$RetourSoldats = $connexion->prepare('UPDATE City SET Soldiers = 0 WHERE City_id = :city_id');
	$RetourSoldats->execute(array( ':Soldiers' => $Soldiers,'city_id'=>$_POST['City_id']));
	echo "Vous avez echoué";
}	
else
{
	$Soldiers = $Soldiers - $Wall+$Soldiers2;
	$RetourSoldats = $connexion->prepare('UPDATE City SET Soldiers = :Soldiers WHERE City_id = :city_id ');
	$RetourSoldats->execute(array( ':Soldiers' => $Soldiers,'city_id'=>$_SESSION['City_id']));
	$pertes=$connexion ->prepare('UPDATE City SET Soldiers=0 ,Wall=0,Gold=(Gold/2) WHERE City_id= :city_id');
	$pertes->execute(array('city_id'=>$_POST['City_id']));
	$goldperdant = $connexion->prepare('SELECT Gold FROM City WHERE City_id= :city_id');
	$goldperdant->execute(array('city_id'=>$_POST['City_id']));
	$goldperdant=$goldperdant->fetch();        
	$goldperdant=$goldperdant['Gold'];
	$Goldgagnés=$connexion->prepare('UPDATE City SET Gold=Gold+:goldperdant WHERE City_id= :city_id');
	$Goldgagnés->execute(array(':city_id'=>$_SESSION['City_id'],':goldperdant'=>$goldperdant));

	echo "Victoire !!!";
}
}
Attack(100);
?>
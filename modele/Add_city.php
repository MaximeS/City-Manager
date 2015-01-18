
<?php
Session_start();

if(!empty($_POST['new_city_name']) AND isset($_POST['new_city_name']) )
{
	include 'connexion_PDO.php';
	
	$newname = $_POST['new_city_name'];
	
	
	$sql = $connexion->prepare("SELECT Name FROM city WHERE Name = '$newname'");
	$sql->execute();
	$result = $sql->fetchAll();
	
	$count = count($result);
	
	if ($count <= 0)
	{
	
		$name = ($_POST['new_city_name']);
		$Player_id = $_SESSION["Player_id"];
		
		
	
		$connexion->exec("INSERT INTO city VALUES ('', '$name','500','500','0','0','0','','0','0.1','0.01','$Player_id',NOW());");
		
		$connexion->exec("INSERT INTO news VALUES ('', 'nouvelle ville : $name','Une nouvelle ville a été créée !',NOW());");
		
		$pseudo = $_SESSION["Player_pseudo"];
		
		
		$_SESSION['Message'] = " Félicitations : La ville a bien été créée !";
		echo "ok";
		header('Location: /City-Manager/'.$pseudo);
	}
	
	else{
	
		$_SESSION['Message'] = " Erreur : Le nom \"$newname\" est déja pris !";
		echo "déja pris";
		header('Location: /City-Manager/addcity');
		
	}
	
}else{

	header('Location: /City-Manager/addcity');
	echo "pas de var";
}

	

	
	
	



	

	/*Penser à séparer en deux fichiers */
?>
<?php



if(!empty($_POST['pseudo']) AND (!empty($_POST['password'])))
{	
	
	$pseudo = $_POST['pseudo'];
	$pass = $_POST['password'];
	
	include '../modele/connexion_PDO.php';

	$sql = "SELECT User_id FROM user WHERE Pseudo = '$pseudo' AND Password = md5('$pass') ";
	
	$sth = $connexion->prepare("SELECT User_id FROM user WHERE Pseudo = '$pseudo' AND Password = md5('$pass') ");
	
	$sth->execute();

	$result = $sth->fetchAll();

	$count = count($result);


	if ($count > 0){



		Session_Start();
		
		foreach  ($connexion->query($sql) as $row) {
		
			$_SESSION['Player_id'] = $row['User_id'];
		
		}
		
		echo $_SESSION['Player_id'];
		
		header('Location: /City-Manager/');




	}else{
	
		header('Location: /City-Manager/');
	
	}
}else{
	
		header('Location: /City-Manager/');
	
	}

	
?>	

<?php

	$user_id = $_SESSION['Player_id'] ;

	$sql = $connexion->prepare("SELECT :name FROM user WHERE user_id = $user_id ");
	$sql->execute();
	$result = $requete->fetch();
	return $result['Name'];
}
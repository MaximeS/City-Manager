<?php
Session_start();

if(!empty($_POST['pseudo']) AND (!empty($_POST['password'])) AND (!empty($_POST['passcheck'])) AND(!empty($_POST['mail_adress'])))
{
	if (($_POST['password']) == ($_POST['passcheck']))
	{
	
		$pseudo = ($_POST['pseudo']);
		$pass = ($_POST['password']);
		
		include '../modele/connexion_PDO.php';
	
		$connexion->exec("INSERT INTO user VALUES ('', '$pseudo', md5('$pass'));");
		
		$connexion->exec("INSERT INTO news VALUES ('', 'nouveau joueur : $pseudo','Un nouveau joueur a rejoins l\'aventure !',NOW());");
		
		echo "<font color='green'> votre compte a bien été ajouté ! </font>";

		$_SESSION['Message'] = " Félicitations ! votre compte a bien été ajouté !";
		
		header('Location: /City-Manager/');

		
	

	}else{
	
	$_SESSION['Message'] = " Erreur : Les mots de passe ne correspondent pas !";
		
		header('Location: /City-Manager/inscription');
	}
}else{
	
	$_SESSION['Message'] = "Erreur : Veuillez remplir tous les champs !";
		
		header('Location: /City-Manager/inscription');
}	
?>

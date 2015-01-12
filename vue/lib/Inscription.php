<meta charset="UTF-8">

<form method="post" action="../../controller">
	<fieldset>
	<legend><h2>Inscription</h2></legend>
	<p>
	<label for="pseudo">Pseudo :</label> </br> <input name="pseudo" type="text" id="pseudo" /></br> </br>
	
	<label for="password">Mot de Passe :</label> </br> <input type="password" name="password" id="password" /></br>
	<label for="password">Vérifier :</label> </br> <input type="password" name="passcheck" id="passcheck" /></br></br>
	
	<label for="password">Adresse mail :</label> </br> <input type="text" name="mail_adress" id="mail_adress" /></br>
	
	</p>
	</br>
	<p><input type="submit" value="Inscription" /></p></form>
	
	<a href="/Projet-Transversal-Php/connexion"> déja membre ? </a>
	
	</fieldset>
	
	
<?php

if(!empty($_POST['pseudo']) AND (!empty($_POST['password'])) AND (!empty($_POST['passcheck'])) AND(!empty($_POST['mail_adress'])))
{
	if (($_POST['password']) == ($_POST['passcheck']))
	{
	
		$pseudo = ($_POST['pseudo']);
		$pass = ($_POST['password']);
		
		include 'connexion_PDO.php';
	
		$connexion->exec("INSERT INTO user VALUES ('', '$pseudo', md5('$pass'));");
		
		echo "<font color='green'> votre compte a bien été ajouté ! </font>";



	

	}else
	
	echo "les mots de passe no correspondent pas";


}else
	
	echo "veuillez remplir tous les champs";
	/*Penser à séparer en deux fichiers */
?>


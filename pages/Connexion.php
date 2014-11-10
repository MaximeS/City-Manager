<?php
Session_start();
Session_destroy();
?>

<meta charset="UTF-8">

<form name="form_connex" method="post" >
	<fieldset>
	<legend><h2>Connexion</h2></legend>
	<p>
	<label for="pseudo">Pseudo :</label> </br> <input name="pseudo" type="text" id="pseudo" /></br> </br>
	<label for="password">Mot de Passe :</label> </br> <input type="password" name="password" id="password" />
	</p>
	</br>
	<p><input type="submit" value="Connexion" /></p></form>
	
	<a href="inscription.php"> pas encore membre ? </a>
	
	</fieldset>
	
	
<?php

if(!empty($_POST['pseudo']) AND (!empty($_POST['password'])))
{	
	
	$pseudo = $_POST['pseudo'];
	$pass = $_POST['password'];
	
			include '../include/connexion_PDO.php';

		$sth = $connexion->prepare("SELECT User_id FROM user WHERE Pseudo = '$pseudo' AND Password = md5('$pass') ");
	
		$sth->execute();
			
			$result = $sth->fetchAll();
			
			$count = count($result);
			
			
	if ($count > 0){
			
			
			
			echo " <div id='hidden'> <form id='form_login' method='post' action ='../index.php'> <input type='text' name='Pseudo' value=$pseudo> ";
			echo " <script> document.getElementById('form_login').submit() </script>";
			
			
			
			
		}
	
	
}
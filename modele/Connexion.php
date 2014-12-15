<?php
Session_start();
Session_destroy();
?>

<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<form name="form_connex" method="post" class="form-horizontal">
	<fieldset>
		<legend><h2>Connexion</h2></legend>
		<p>
			<div class="row">
				<label for="pseudo" class="col-sm-2 control-label">Pseudo :</label> </br> <input name="pseudo" type="text" id="pseudo" /></br> </br>
				<label for="password" class="col-sm-2 control-label">Mot de Passe :</label> </br> <input type="password" name="password" id="password" />
			</p>
		</br>
		<p><input type="submit" value="Connexion" class="col-sm-offset-2 btn btn-default"/></p></form>
		<br/>
		<a href="inscription.php"><input type="button" class="col-sm-offset-2 btn btn-default" value="pas encore membre ?">  </a>
	</div>
	
	
</fieldset>


<?php

if(!empty($_POST['pseudo']) AND (!empty($_POST['password'])))
{	
	
	$pseudo = $_POST['pseudo'];
	$pass = $_POST['password'];
	
	include 'connexion_PDO.php';

	$sth = $connexion->prepare("SELECT User_id FROM user WHERE Pseudo = '$pseudo' AND Password = md5('$pass') ");
	
	$sth->execute();

	$result = $sth->fetchAll();

	$count = count($result);


	if ($count > 0){



		echo " <div id='hidden'> <form id='form_login' method='post' action ='../index.php'> <input type='text' name='Pseudo' value=$pseudo> ";
		echo " <script> document.getElementById('form_login').submit() </script>";




	}
	
	
}
/*Penser à séparer en deux fichiers */
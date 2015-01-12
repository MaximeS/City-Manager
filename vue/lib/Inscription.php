<meta charset="UTF-8">

<form method="post" action="controller/CheckInscription.php" >
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
	
	<a href="/City-Manager/connexion"> déja membre ? </a>
	
	</fieldset>
	
<?php
Session_start();


if (!empty($_SESSION['Message'])){
	
		$message = $_SESSION['Message'];
		echo "<script> alert('$message'); </script>;";
		
		unset($_SESSION['Message']);
	}	
	
?>

<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<form method="post" action="controller/CheckInscription.php" class="form-horizontal" >
	<fieldset>
	<legend><h2>Inscription</h2></legend>
	<p>
	<div class="row">
	<label for="pseudo" class="col-sm-2 control-label">Pseudo :</label> </br> <input name="pseudo" type="text" id="pseudo" /></br> </br>
	
	<label for="password" class="col-sm-2 control-label">Mot de Passe :</label> </br> <input type="password" name="password" id="password" /></br>
	<label for="password" class="col-sm-2 control-label">Vérifier :</label> </br> <input type="password" name="passcheck" id="passcheck" /></br></br>
	
	<label for="password" class="col-sm-2 control-label">Adresse mail :</label> </br> <input type="text" name="mail_adress" id="mail_adress" /></br>
	
	</p>
	</br>
	<p><input type="submit" value="Inscription" class="col-sm-offset-2 btn btn-default"/></p></form>
	
	<a href="/City-Manager/connexion" class="col-sm-offset-2 btn btn-default"> déja membre ? </a>
	</div>
	</fieldset>
	
<?php
Session_start();


if (!empty($_SESSION['Message'])){
	
		$message = $_SESSION['Message'];
		echo "<script> alert('$message'); </script>;";
		
		unset($_SESSION['Message']);
	}	
	
?>

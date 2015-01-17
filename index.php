<LINK href="/City-Manager/vue/css/general.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<?php
Session_start();


	// require composer autoload (load all my libraries)
  require 'vendor/autoload.php';
	
	\Slim\Slim::registerAutoloader();
	
	$app = new \Slim\Slim([
	
		'templates.path' => 'vue/lib'
	
	]);
	
	require 'modele/connexion_PDO.php';
	
	$app->get('/', function() use ($app){
	
		$app->render('../../controller/controllerHome.php');
	
	});
	
	$app->get('/connexion', function() use ($app){
	
		$app->render('Connexion.php');
	
	});
	
	$app->get('/inscription', function() use ($app){
	
		$app->render('Inscription.php');
	
	});
	
	$app->get('/addcity', function() use ($app){
		
		if (!empty($_SESSION['Player_id'])){
			$app->render('Add_city.php');
		}
		else{
			$app->render('Connexion.php');
		}
	});	
		$app->get('/erasecity', function() use ($app){
		
		if (!empty($_SESSION['Player_id'])){
			$app->render('Erase_city.php');
		}
		else{
			$app->render('Connexion.php');
		}
	
	});
	
	$app->get('/:pseudo', function($pseudo) use ($app){
	
		$sql = "SELECT Pseudo FROM user";
		
		if (!empty($_SESSION['Player_id'])){
			$app->render('../../controller/ControllerProfil.php', array('pseudo'=>$pseudo));
		}
		else{
			$app->render('Connexion.php');
		}
	
	})->name('contact')->conditions(['name' => '[a-zA-Z0-9]*']);
	
	
	
	
	$app->get('/:pseudo/:City', function($pseudo, $City) use ($app){
	
		$app->render('../../controller/controllerCity.php', array('pseudo'=>$pseudo, 'City'=>$City));
	
	})->name('contact')->conditions(['name' => '[a-zA-Z0-9]*']);

	
	if (!empty($_SESSION['Player_id'])){
	$app->render('headerco.php', compact('app'));
	}
	else {
	$app->render('headernoco.php', compact('app'));
	}
	$app->run();
	$app->render('footer.php',  compact('app'));
	
	
	
	
	if (!empty($_SESSION['Message'])){
	
		$message = $_SESSION['Message'];
		echo "<script> alert('$message'); </script>";
		
		unset($_SESSION['Message']);
	}
	
?>

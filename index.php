<?php

	// require composer autoload (load all my libraries)
  require 'vendor/autoload.php';
	
	\Slim\Slim::registerAutoloader();
	
	$app = new \Slim\Slim([
	
		'templates.path' => 'vue/lib'
	
	]);
	
	$app->get('/', function() use ($app){
	
		$app->render('../../controller/controllerHome.php');
	
	});
	
	$app->get('/connexion', function() use ($app){
	
		$app->render('Connexion.php');
	
	});
	
	$app->get('/inscription', function() use ($app){
	
		$app->render('Inscription.php');
	
	});
	
	$app->get('/contact/:name', function($name) use ($app){
	
		$app->render('contact.php', compact('name'), 404);
	
	})->name('contact')->conditions(['name' => '[a-zA-Z0-9]*']);

	
	$app->render('header.php', compact('app'));
	$app->run();
	$app->render('footer.php',  compact('app'));
?>
<?php

$PARAM_hote='localhost'; // le chemin vers le serveur
			$PARAM_nom_bd='suivi_SIV'; // le nom de votre base de données
			$PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
			$PARAM_mot_passe=''; // mot de passe de l'utilisateur pour se connecter


$connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe); //connexion à la base de données
			
			$connexion->query('SET NAMES utf8');


?>
<?php
Session_start();

$Player_id = $_SESSION['Player_id'];

include "connexion_PDO.php";
$req=$connexion->prepare('SELECT * FROM city WHERE User_id=:id ORDER BY Gold_s' );
$req->execute(array('id'=>$Player_id));
$cities=$req->fetchAll();

var_dump($cities);

;?>
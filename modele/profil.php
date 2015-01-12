<?php
include "connexion_PDO.php";
$req=$connexion->prepare('SELECT * FROM city WHERE User_id=:id');
$req->execute(array('id'=>$_SESSION['Player_id']));
$cities=$req->fetchAll;

;?>
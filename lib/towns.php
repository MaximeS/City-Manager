<?php
	include '../include/connexion_PDO.php';
    $sql='SELECT Name FROM city WHERE User_id="$Player_id"';
    foreach ($connexion->query($sql) as $row ) {
    	echo $row['Name']."<br/>";
    }
?>
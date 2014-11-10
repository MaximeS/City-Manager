<?php
include '../include/connexion_PDO.php';
$News_id = $connexion->query('SELECT News_id FROM news');
foreach ($News_id as $value)
{
echo ($connexion->query('SELECT Title FROM news'));
echo ($connexion-> query('SELECT Content FROM news'));
}
unset($value);
?>
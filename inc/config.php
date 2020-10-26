<?php
/* initialisation */

$connexion = 'mysql:host=localhost;dbname=le_bateau_pirate';
$user ="web001";
$pass="topsecret";

try{
    $dbh = new PDO($connexion, $user, $pass);
} catch (PDOException $e) {
    echo"grosse catastrophe !:".$e->getMessages()."<br>";
    die();
}

$dbh->query("SET NAMES UTF8");


?>
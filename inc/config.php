<?php
/* initialisation */

$connexion = 'mysql:host=localhost;dbname=le_bateau_pirate';
$user ="web001";
$pass="topsecret";

try{
    $dbh = new PDO($connexion, $user, $pass);
} catch (PDOException $e) {
    print"grosse catastrophe !:".$e->getMessages()."<br>";
    die();
}


?>
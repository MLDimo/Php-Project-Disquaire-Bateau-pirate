<?php


$connexion = 'mysql:host=localhost;dbname=le_bateau_pirate';
$user ="web001";
$pass="topsecret";

$cmd="";

try{
    $dbh = new PDO($connexion, $user, $pass);
} catch (PDOException $e) {

}


echo"<form method='GET'>
<br><input type='texte' name='nom' placeholder=\"le nom de l'utilisateur \">
<br><input type='email' name='email' placeholder=\"l'email de l'utilisateur\">
";
// les niveaux viennent de MySQL
foreach( $dbh->query("SELECT id, nom FROM niveau ORDER BY nom ") as $ligne){
    echo "<option value=".$ligne['id'].">".$ligne['nom']."</option>";
}

echo"
<br><input type='submit' name='cmd' value='reserver'>
</form>";


$req = $dbh->prepare("INSERT INTO utilisateur (id, nom, email) VALUES(NULL, :nom, :email) ");
$req->Bindparam(":nom", $_GET['nom']);
$req->Bindparam(":email", $_GET['email']);

    if ($req->execute()){
        echo "l'utilisateur " .$_GET['nom']." a été ajouté";
    }else{
echo "l'utilisateur " .$_GET['nom']." n'a pas été ajouté";

echo "<br>".$req->errorinfo()[2];
}


?>
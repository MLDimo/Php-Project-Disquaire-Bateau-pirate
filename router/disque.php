<?php


$chemin ="template/assets/img/";
$cmd="";



 echo " 
<div class='container-fluid mld-head'>
    <div class='row'>
        <div class='col'>

        </div>
    </div>
</div>

<nav class='navbar j mld-nav'>
<div class='container'>
<div class='col-sm'> </div>
<div class='col-sm'>
<a class='nav-link' href='home.php'>Accueil</a>
    <a class='nav-link'>Catalogue</a>
</div>
<div class='col-sm'> </div>
</div>
</nav>";



/* echo"
<div class='container-fluid  mld-body'>
    <h1 class='mld-titre'> $ligne['nom'] </h1>
    <div class='container'>
        <div class='row'>
            <div class='col'>
            
            </div>
        </div>

    </div>
</div>
";

*/






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
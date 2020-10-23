<?php
$chemin ="template/assets/img/";

echo"<h1> C'EST LE ZOOOOOOOOO</h1>
<div class='container'>
<div class='row'>
";
foreach($dbh->query("SELECT id, nom, img, prix, description FROM Disques WHERE id = $_GET[id] ")as $ligne) {

echo "
<div class='col' >

    <img  src=".$chemin.$ligne["img"].">"."<h3> ".$ligne['nom']."</h3><h6> Dead or Alive </h6>".$ligne['prix']." $ ";
}









echo"<form method='GET'>
     <br><input type='texte' name='nom' placeholder=\"le nom de l'utilisateur \">
     <br><input type='email' name='email' placeholder=\"l'email de l'utilisateur\">
     ";
     
     echo"
     <br><input type='submit' name='cmd' value='reserver'>
     </form>";
     
    $req = $dbh->prepare("INSERT INTO utilisateur (`id`, `niveau`, `nom`, `email`) VALUES(NULL, '2', ':nom', ':email') ");
    
    
     $req->Bindparam(":nom", $_GET['nom']);
         $req->Bindparam(":email", $_GET['email']);
     
     if ($req->execute()){
             echo "l'utilisateur " .$_GET['nom']." a été ajouté";
         }else{
     echo "l'utilisateur " .$_GET['nom']." n'a pas été ajouté";
     echo "<br>".$req->errorinfo()[2];
     }
     
echo"<form method='GET'>"
 
?>



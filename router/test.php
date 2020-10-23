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
?>



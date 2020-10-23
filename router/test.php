<?php

echo"<div class='container'>
<div class='row'>
";
foreach($dbh->query("SELECT id, nom, img, prix, description FROM Disques")as $ligne) {

echo "<div class='col' >
        
         
            <img  src=".$chemin.$ligne["img"].">"."<h3> ".$ligne['nom']."</h3><h6> Dead or Alive </h6>".$ligne['prix']." $
            
            ";
}
?>



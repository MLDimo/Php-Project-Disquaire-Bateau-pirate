<?php
$chemin ="template/assets/img/";


echo"<div class='container'>
<div class='row'>";
foreach($dbh->query("SELECT id, nom, img, prix, description FROM disques order by id DESC limit, 3 ") as $ligne){  echo "
    <div class='col'>
        <div class=' content'>
            <div class=' heading'>
            </div>
            <p class='description'></p><div class='card' href='#!'>
            <div class='front'  style='background-image: url(".$chemin.$ligne['img'].")'>

            </div>
            <div class='back'>
                <div>
                    <p >".$ligne['description']."</p> 



                </div>
                </div>
            </div>
        </div>
    </div> ";
}

    echo" 
    </div>
    </div>";










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



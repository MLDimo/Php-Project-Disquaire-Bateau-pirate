<?php 
$chemin ="template/assets/img/";
$cmd="";
$contenu = "";
$partie1=""; 

$texte = array("titre"=> "Catalogue",
"partie1"=>$partie1,
"partie2"=>$partie2,
"contenu" =>$contenu);

echo " <pre>
<div class='container'>
    <div class='row mld-div-card'>";
    foreach($dbh->query("SELECT nom, img FROM Disques ORDER BY id desc")as $ligne) {

      echo"  <div class='col-sm-5 mld-pos-card' >
            <div class='mld-card'>
                <img class='mld-card-img' src=".$chemin.$ligne["img"].">"."<br><h3> ".$ligne['nom']."</h3><br> ".$ligne['description']."
                <br><input type='submit' class='mld-card-a'name='$cmd' value='Voir'>
            </div>
        </div>";
    }
 echo"</div>
</div>
</pre>";



if(isset($_GET['cmd'])){
    if (isset($_GET ['id'])){
        $id = $_GET['id'];
    }else {
        $id=0;
    }
    $cmd = $_GET['cmd'];

 
        switch($cmd){

    
            case "Voir":

                foreach($dbh->query("SELECT nom, img, description As Disques FROM Commentaire C, Disques WHERE Disques.id = C.disques AND U.id = $id" ) as $ligne) {
                    echo " <pre>

                            
                     <img src=".$chemin.$ligne[" img"].">"." ".$ligne['nom']." ".$ligne['description']."
                            

                    </pre>";

                }
            break; 
        default:
        echo"sesmorts";
        }
    }


?>









<?php 
$chemin ="template/assets/img/";
$cmd="";
$page="home";


echo " 
<div class='container-fluid mld-head'>
    <div class='row'>
        <div class='col'>

        </div>
    </div>
</div>

<nav class='navbar mld-nav'>
<div class='container'>
<div class='col-sm'> </div>
<div class='col-sm'>
    <a class='nav-link' href='index.php?page=home'>Accueil</a>
</div>
<div class='col-sm'> </div>
</div>
</nav>

<div class='container-fluid  mld-body'>
    <h1 class='mld-titre'> Catalogue </h1>
    <div class='container'>
        <div class='row mld-div-card'>
        
        ";
        foreach($dbh->query("SELECT id, nom, img, prix FROM Disques ORDER BY id desc")as $ligne) {

        echo"  <div class='col-sm-5 mld-pos-card' >
                <form >
                <div class='mld-card'>
                    <div class='gneu'></div>
                    <h4>WANTED</h4>
                    <img class='mld-card-img' src=".$chemin.$ligne["img"].">"."<h3> ".$ligne['nom']."</h3><h6> Dead or Alive </h6>".$ligne['prix']." $
                    <br><a type='submit' class='mld-card-a' name='$cmd' value='Voir' href='index.php?page=disque&id=".$ligne['id']."'>Voir</a><br><div class='gneu'></div>
                    <input type='hidden' value=".$ligne['id']." name='id'>";
                    
                    echo"
                </div>
                </form>
            </div>";
        }
    echo"</div>
    </div>
</div>
";


/*
if(isset($_GET['cmd'])){
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
*/



?>









<?php
$chemin ="template/assets/img/";












/*
echo"<form method='GET'>
     <br><input type='texte' name='nom' placeholder=\"le nom de l'utilisateur \">
     <br><input type='email' name='email' placeholder=\"l'email de l'utilisateur\">
     ";
     
     echo"
     <br><input type='submit' name='cmd' value='reserver'>
     </form>";
     
    $req = $dbh->prepare("INSERT INTO utilisateur (`id`, `niveau`, `nom`, `email`) VALUES(NULL, 2, :nom, :email) ");
    
    
     $req->Bindparam(":nom", $_GET['nom']);
         $req->Bindparam(":email", $_GET['email']);
     
     if ($req->execute()){
             echo "l'utilisateur " .$_GET['nom']." a été ajouté";
         }else{
     echo "l'utilisateur " .$_GET['nom']." n'a pas été ajouté";
     echo "<br>".$req->errorinfo()[2];
     }
     
*/
 

?>


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
    <a class='nav-link' href='index.php?page=catalogue'>Catalogue</a>
</div>
<div class='col-sm'> </div>
</div>
</nav>

<div class='container-fluid  mld-body'>
    <h1 class='mld-titre'> Accueil </h1>
    <div class='container'>
    <div class='row'>
        <div class='col mld-center'>
        <h2>Nos Dernières Nouveautés </h2>
        </div>
    </div>
        <div class='row mld-center'>";
        foreach($dbh->query("SELECT id, nom, img, prix,description FROM disques order by id DESC limit 3") as $ligne) {
            echo "
            
            <div class='container-fluid content mld-body'>
              <div class='row heading'></div>
            
            
                <div class='col-3 description'>
               <div class='card' href='#!'> 
               <div class='front'  style='background-image: url(template/assets/img/".$ligne['img'].")'>
            
                </div>
                <div class='back'>
                  <div>
                    <p >".$ligne['description']."</p>
            
            
                  </div>
            </div>
                </div></div>";}
                
echo  " </div>
        </div>
    </div>
    </div>
</div>
";





foreach($dbh->query("SELECT id, nom, img, prix,description FROM disques order by id DESC limit 3") as $ligne) {
    echo "
    
    <div class='container-fluid content mld-body'>
      <div class='row heading'></div>
    
    
        <p class='col-3 description'></p>
       <div class='card' href='#!'> 
       <div class='front'  style='background-image: url(template/assets/img/".$ligne['img'].")'>
    
        </div>
        <div class='back'>
          <div>
            <p >".$ligne['description']."</p>
    
    
          </div>
    
        </div></div>";}
        ;
?>
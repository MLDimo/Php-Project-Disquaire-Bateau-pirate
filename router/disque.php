<?php


$chemin ="template/assets/img/";
$cmd="";
$page="disque";
$id=$_GET['id'] ;


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
<a class='nav-link' href='index.php?page=home'>Accueil</a>
</div>
<div class='col-sm'>
<a class='nav-link' href='index.php?page=catalogue'>Catalogue</a>
</div>
<div class='col-sm'> </div>
</div>
</nav>";




foreach($dbh->query("SELECT id, nom, img, prix, description FROM Disques WHERE id = $id ")as $ligne) {

echo "
<div class='container'>
    <div class='row'>
        <div class='col mld-descript-disc' >
            <h1> ".$ligne['nom']."</h1>
        </div>
    </div>
    <div class='row'>
        <div class='col-sm mld-img-col' >
            <img class='mld-disque-img' src=".$chemin.$ligne["img"].">
        </div>
        <div class='col-sm' >
            <div class='row mld-descript'>
                <div class='col'>
                    <h5> ".$ligne['description']."</h5>
                    <h4><br> Prix : ".$ligne['prix']." $ </h4><br>
                </div>
            </div>
            <div class='row mld-descript'>
                <div class='col-sm'>
                    <h3> Commentaire </h3><br>
                </div>
            </div>
            <form action=''>
                <div class='row mld-descript'>
                    <div class='col-sm stars'>
                        <input type='text' name='nom' placeholder=\"Nom \"  style='width: 220px; height: 30px'>
                        <input type='email' name='email' placeholder=\"Email\" style='width: 220px; height: 30px'><br>
                    </div>
                </div>
                <div class='row mld-descript'>
                    <div class='col-sm rating rating2''>
                    
                            <a href='#5' title='Give 5 stars'>★</a>
                            <a href='#4' title='Give 4 stars'>★</a>
                            <a href='#3' title='Give 3 stars'>★</a>
                            <a href='#2' title='Give 2 stars'>★</a>
                            <a href='#1' title='Give 1 star'>★</a>
                            <textarea type='text' name='com placeholder='\" Commentaire \"' style='width: 450px; height: 50px'></textarea>
                    

                    </div>
                </div>
                <div class='row'>
                    <div class='col mld-img-col'>
                        <input type='submit' value='Envoyer' name='note&com'>
                        <input type='hidden' name='page' value='disque'>
                    </div>
                </div>
            </form> 
                </div>
            </div>
        </div> 
    </div>
</div>
";


}




echo"<div class='container-fluid'>
    <div class='row'>
    <div class='col'>
    <form method='GET'>
     <br><input type='texte' name='nom' placeholder=\"le nom de l'utilisateur \">
     <br><input type='email' name='email' placeholder=\"l'email de l'utilisateur\">
     ";
     
     echo"
     <br><input type='submit' name='cmd' value='reserver'>
        <input type='hidden' name='page' value='disque'>
     </form>
     </div>
     </div>
     </div>";
     

     
    $req = $dbh->prepare("INSERT INTO utilisateur (`id`, `niveau`, `nom`, `email`) VALUES(NULL, 2, :nom, :email) ");
    
    
     $req->Bindparam(":nom", $_GET['nom']);
         $req->Bindparam(":email", $_GET['email']);
     
     if ($req->execute()){
             echo "l'utilisateur " .$_GET['nom']." a été ajouté";
         }else{
     echo "l'utilisateur " .$_GET['nom']." n'a pas été ajouté";
     echo "<br>".$req->errorinfo()[2];
     }





     $req= $dbh->prepare("INSERT INTO  Commentaire (id, disques nom, com, note) VALUES(NULL, :nom, $id, :com, :note)");

     $req->Bindparam(":com", $_GET['nom']);
     $req->Bindparam(":note", $_GET['email']);
 

?>
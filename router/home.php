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
        <div class='col'>
            <h2>Nos Dernières Nouveautés </h2>";
            foreach($dbh->query("SELECT id, nom, img FROM disques order by id DESC limit 3") as $ligne) {
                echo $ligne['nom']."<img class='mld-card-img' src=".$chemin.$ligne['img'].">";
            }
echo  " </div>
        </div>
    </div>

    </div>
</div>
";

?>
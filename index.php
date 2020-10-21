<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="template/assets/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    


<?php 

$connexion = 'mysql:host=localhost;dbname=le_bateau_pirate';
$user ="web001";
$pass="topsecret";
$chemin ="template/assets/img/";
$cmd="";


try{
    $dbh = new PDO($connexion, $user, $pass);
} catch (PDOException $e) {
    echo "lkfdj";
    die();
}

foreach($dbh->query("SELECT nom, img FROM Disques ORDER BY id desc")as $ligne) {

echo " <pre>
<div class='container'>
    <div class='row'>
        <div class='col-sm-5 mld-pos-card' >
            <div class='mld-card'>
    
                <img src=".$chemin.$ligne["img"].">"."<br> ".$ligne['nom']."<br> ".$ligne['description']."
                <input type='submit' name='$cmd' value='Voir'>
            </div>
        </div>
    </div>
</div>
</pre>";

}

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


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>
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
?>



<?php 

class Page{

    private $template;
    private $personnalisations;

    function __construct(){
        $this->template="template";
        
    }
    function __toString(){
        //todo lire le template

        $contenu = file_get_contents($this->template."/index.twig");
        
        foreach($this->personnalisations as $key=>$value){
            $contenu = str_replace("{{ $key }}",$value, $contenu);
        }

        //on a pas besoin de sortir du dossier classes car il prend le html a la source

        return $contenu;

    }
    function prepare(){
        global $dbh;
        if(isset($_GET['page'])){
            $page= $_GET['page'];
        }else{
            $page ="home";
        }
        include "router/$page.php";
        //$this->personnalisations = $texte;

    }
}
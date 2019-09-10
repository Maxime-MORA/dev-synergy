<?php
include_once('./models/dbconnect.php'); 
class Post extends dataBase
{
    public function getAll(){ //Recuperation de tout les témoignages
         $db=$this->connectTo(); //Connexion à la BDD
         $retour = $db->prepare('SELECT * FROM blog ORDER BY date DESC'); //Récupération de tout les articles sur la BDD
         $retour->execute();
         $view = new Allview;
         $view->viewAll($retour); //Création de la vue de tout les articles
    }
}
?>
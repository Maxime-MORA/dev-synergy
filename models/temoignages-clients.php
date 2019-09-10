<?php
include_once('./models/dbconnect.php'); 
class Temoignage extends dataBase
{
    public function getAll(){ //Recuperation de tout les témoignages
         $db=$this->connectTo(); //Connexion à la BDD
         $retour = $db->prepare('SELECT id, name, role, content, date FROM temoignages ORDER BY date DESC'); //Récupération de tout les articles sur la BDD
         $retour->execute();
         $view = new Allview;
         $view->viewAll($retour); //Création de la vue de tout les articles
    }
}
?>
<?php
//Informations sur la page
$title = "Nos clients témoignent - Synergy - Logiciel GEIDE";
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus venenatis mauris nec molestie dapibus. Cras lorem libero, lobortis id iaculis eget, posuere et diam. Quisque tincidunt mi vitae lorem dignissim euismod. Praesent porta eget sem nec bibendum. Phasellus consequat erat sit amet erat aliquet ullamcorper.";
//

//Connexion à la base de donnéees
include_once('./models/dbconnect.php'); 
$database = new dataBase;
$database->connectTo();
//

//Partie HTML
require_once('./components/start-requires.php');
require_once('./components/navbar.php');
$herotext = "Nos clients témoignent";
require_once('./components/hero-banner-min.php');
//
require_once('./views/temoignages-clients.php');
require_once('./models/temoignages-clients.php');
//Récupération de tout les articles
$temoignage = new Temoignage;
$temoignage->getAll(); 
//
require_once('./components/footer.php');
require_once('./components/end-requires.php');
//
?>
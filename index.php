<?php
$url = '';
if(isset($_GET['url'])) {
    $url = $_GET['url'];
}
//Page d'accueil
if($url == '') {
    require 'controllers/homePage.php';
}
//Notre expertise
elseif($url == 'notre-expertise') {
    require 'controllers/notre-expertise.php';
}
//Nos solutions
elseif($url == 'nos-solutions') {
    require 'controllers/nos-solutions.php';
}
//Developpement spécifique
elseif($url == 'developpement-specifique') {
    require 'controllers/developpement-specifique.php';
}
//Témoignages clients
elseif($url == 'temoignages-clients') {
    require 'controllers/temoignages-clients.php';
}
//Page d'actualité
elseif($url == 'actualite') {
    require 'controllers/actualite.php';
}
//Page de contact
elseif($url == 'contact') {
    require 'controllers/contact.php';
}
//Page d'erreur 404
else {
    require 'controllers/error404.php';
}
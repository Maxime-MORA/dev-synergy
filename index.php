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
elseif($url == 'notre-actualite') {
    require 'controllers/actualite.php';
}
//Page de contact
elseif($url == 'nous-contacter') {
    require 'controllers/contact.php';
}
//Page de connexion
elseif($url == 'synergy-login') {
    require 'controllers/login.php';
}
//Page de contact - ADMIN
elseif($url == 'admin-contact') {
    require 'controllers/admin-contact.php';
}
//Témoignages clients - ADMIN
elseif($url == 'admin-temoignages') {
    require 'controllers/admin-temoignages.php';
}
//Page d'actualité - ADMIN
elseif($url == 'admin-actu') {
    require 'controllers/admin-actu.php';
}
//Page d'erreur 404
else {
    require 'controllers/404.php';
}
<?php
$url = '';
if(isset($_GET['url'])) {
    $url = $_GET['url'];
}
//Page d'accueil
if($url == '') {
    require 'controllers/homePage.php';
}
elseif($url == 'notre-expertise') {
    require 'controllers/notre-expertise.php';
}
elseif($url == 'nos-solutions') {
    require 'controllers/nos-solutions.php';
}
elseif($url == 'developpement-specifique') {
    require 'controllers/developpement-specifique.php';
}
elseif($url == 'temoignages-clients') {
    require 'controllers/temoignages-clients.php';
}
elseif($url == 'actualite') {
    require 'controllers/actualite.php';
}
elseif($url == 'contact') {
    require 'controllers/contact.php';
}
else {
    require 'controllers/error404.php';
}
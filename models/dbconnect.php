<?php
class dataBase
{ //Connexion à la base de donnée
    public function connectTo(){
         //Informations de la BDD
         $servername='localhost';
         $username ='root';
         $password = '';
        try {
             // Connexion à la base de donnée
             $db = new PDO('mysql:host=localhost; dbname=dev-synergy', $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
             $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (Exception $e) {
             echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
        return $db;
    }
}
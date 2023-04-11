<?php 

// Connexion à la BDD
// Renseignez ici les informations de votre BDD

// Pour un déploiement Heroku, rdv dans Settings/Reveal Config Vars/ copier coller l'adresse mysql contenant toutes les infos
// Ex : mysql://bf61bcf48e529d:d14b5f42@us-cdbr-east-06.cleardb.net/heroku_ed494a7436c047c?reconnect=true
// Ci dessous, les infos utilisées dans $user, $pass, host

$user = 'bf61bcf48e529d';
$pass = 'd14b5f42';
$host = 'us-cdbr-east-06.cleardb.net';
$dbname = 'heroku_ed494a7436c047c';

try
{
  // $db = new PDO('mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_ed494a7436c047c', $user, $pass);
  $db = new PDO('mysql:host='.$host. ';dbname=' .$dbname, $user, $pass);
  
  // Connexion en local
  // $db = new PDO('mysql:host=localhost;dbname=form', $user, $pass);

} catch (PDOException $e)

{
    print "Erreur" . $e->getMessage() . "<br/>";
    die;
}
?>
<?php 

// Connexion à la BDD
// Renseignez ci dessous les informations de votre BDD

//* Pour un déploiement Heroku, créez un addOn "ClearDB MySQL".
// Rdv dans Settings/Reveal Config Vars/ copier coller l'adresse mysql contenant toutes les infos
// Ci dessous, les infos utilisées dans $user, $pass, host de l'adresse mysql

// $user = 'bf61bcf48e529d';
// $pass = 'd14b5f42';
// $host = 'us-cdbr-east-06.cleardb.net';
// $dbname = 'heroku_ed494a7436c047c';

//* Pour HOSTINGER
$user = 'u897180116_bf61bcf48e529d';
$pass = 'Nicowan23$dropplist';
$host = 'localhost';
$dbname = 'u897180116_dropplistDB';

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
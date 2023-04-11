<?php 

// Connexion à la BDD

$user = 'bf61bcf48e529d';
$pass = 'd14b5f42';

try
{
  $db = new PDO('mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_ed494a7436c047c', $user, $pass);
  // $db = new PDO("us-cdbr-east-06.cleardb.net", "bf61bcf48e529d", "d14b5f42", "heroku_ed494a7436c047c");
} catch (PDOException $e)

{
    print "Erreur" . $e->getMessage() . "<br/>";
    die;
}
?>
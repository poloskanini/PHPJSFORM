<?php 

// Connexion à la BDD

$user = 'root';
$pass = 'root';

try
{
  // $db = new PDO('mysql:host=localhost;dbname=form', $user, $pass);
  $db = new PDO("us-cdbr-east-06.cleardb.net", "bf61bcf48e529d", "d14b5f42", "heroku_ed494a7436c047c");
} catch (PDOException $e)

{
    print "Erreur" . $e->getMessage() . "<br/>";
    die;
}
?>
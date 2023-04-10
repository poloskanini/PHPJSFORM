<?php 

// Connexion à la BDD

$user = 'root';
$pass = 'root';

try
{
  $db = new PDO('mysql:host=localhost;dbname=form', $user, $pass);
} catch (PDOException $e)

{
    print "Erreur" . $e->getMessage() . "<br/>";
    die;
}
?>
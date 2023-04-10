<?php

require 'vendor/autoload.php';

// Connexion BDD
include 'functions.php';

use Mailjet\Client;
use \Mailjet\Resources;

// Clés publique et privée de MAILJET
define('MJ_APIKEY_PUBLIC', '9643dbf3120f04b54c7c81bb32565df8');
define('MJ_APIKEY_PRIVATE', 'c38f88aa336083980bfcfd690372ba28');

// Instancier un nouveau mail
$mj = new Client(MJ_APIKEY_PUBLIC, MJ_APIKEY_PRIVATE, true,['version' => 'v3.1']);

if(!empty($_POST['firstName'])
    && !empty($_POST['lastName']) 
    && !empty($_POST['email']) 
    && !empty($_POST['phoneNumber']) 
    && !empty($_POST['address']) 
    && !empty($_POST['city']) 
    && !empty($_POST['postCode']) 
    && !empty($_POST['conditions'])) {

      $surname = htmlspecialchars($_POST['firstName']);
      $lastName = htmlspecialchars($_POST['lastName']);
      $email = htmlspecialchars($_POST['email']);
      $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
      $address = htmlspecialchars($_POST['address']);
      $city = htmlspecialchars($_POST['city']);
      $postCode = htmlspecialchars($_POST['postCode']);
      $conditions = htmlspecialchars($_POST['conditions']);
      $today = date_create()->format('Y-m-d H:i:s');


      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $body = [
          'Messages' => [
              [
                  'From' => [
                      'Email' => "nicolasbarthes.lana@gmail.com",
                      'Name' => "Cyber Monday"
                  ],
                  'To' => [
                      [
                          'Email' => $email,
                          'Name' => "You"
                      ]
                  ],
                  'TemplateID' => 4716740,
                  'TemplateLanguage' => true,
                  'Variables' => [
                    'day' => "Tuesday",
                    'surname' => $surname,
                    'lastName' => $lastName,
                    'email' => $email,
                    'phoneNumber' => $phoneNumber,
                    'address' => $address,
                    'postCode' => $postCode,
                    'city' => $city,
                    'content' => 
                      "Bonjour $surname ".$lastName." ! <br><br>
                      Votre mail est $email, et votre numéro de téléphone est le ".$phoneNumber.".<br>
                      Vous vivez au $address, $postCode $city, et vous avez validé les C.G.U. <br><br>
                      Vous pouvez donc participer à notre grande promotion cadeau !"
                ]
              ]
          ]
      ];

      // Ajout de l'utilisateur en BDD
      include 'addUser.php';

      // Envoi de l'email
      $response = $mj->post(Resources::$Email, ['body' => $body]);
      $response->success();
      include 'emailsend.php';

      } else {
        header('Location:index.php');
        die();
      }
  }
?>
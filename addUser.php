<?php 

// Ajout de l'utilisateur en BDD
$sql = "INSERT INTO user (firstName, lastName, email, phoneNumber, address, city, postCode, createdAt) VALUES (:firstName, :lastName, :email, :phoneNumber, :address, :city, :postCode, :createdAt)";

$statement = $db->prepare($sql);

$statement->execute([
  'firstName' => $surname,
  'lastName' => $lastName,
  'email' => $email,
  'phoneNumber' => $phoneNumber,
  'address' => $address,
  'city' => $city,
  'postCode' => $postCode,
  'createdAt' => $today
]);

?>
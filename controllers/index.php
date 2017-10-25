<?php
require ("../entities/Client.php");
require ("../entities/Produit.php");
require ("../model/ClientManager.php");

//Instance of new Client
$data = [
  "id"=>"3",
  "name"=>"brandon",
  "age"=>"35"
];

$ClientManager= new ClientManager();

$clients= $ClientManager->getAllClients();
var_dump($clients);

foreach ($clients as $key => $value) {
  $clients[$key] = new Client($value);
}
var_dump($clients);

$my_client= new Client($data);



include "../views/indexVue.php";
 ?>

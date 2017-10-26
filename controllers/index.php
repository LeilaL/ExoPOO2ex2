<?php
require ("../entities/Chat.php");
require ("../model/ChatManager.php");

//Instance of new Client
// $data = [
//     // 'nom' => $nom,
//     // 'age' => $age,
//     // 'sexe' => $sexe,
//     // 'couleur' => $couleur
//     $nom = $_POST['nom'],
//     $age = $_POST['age'],
//     $sexe = $_POST['sexe'],
//     $couleur = $_POST['couleur']
// ];

$ChatManager= new ChatManager();

if (!empty($_POST)) {
  // if (empty($_POST['nom'])){
  //   echo 'vous devez entrer un nom';
  // }
  // else {
  //   if (!empty($_POST['nom']) && $_POST['nom'].length<=15){
  //   $name = $_POST['nom'];
  //   }
  // }
  // $id = $chat['id'];
  $chat = new Chat(
  ['nom' => $_POST['nom'],
  'age' => $_POST['age'],
  'sexe' => $_POST['sexe'],
  'couleur' => $_POST['couleur']]);
  $ChatManager->insertChats($chat);
}

$chats= $ChatManager->getAllChats();
foreach ($chats as $key => $value) {
  $chats[$key] = new Chat($value);
}
// var_dump($chats);
// $my_chat= new Chat($data);



include "../views/indexVue.php";
// include "../views/homeVue.php";
 ?>

<?php

class ClientManager {

  public function getBdd() {
      $bdd = new PDO('mysql:host=localhost;dbname=EXOCHATS;charset=utf8', 'root', 'leilalababsa');
      return $bdd;
  }


public function getAllChats(){
$response=$this->getBdd()->query("SELECT * FROM chats");
$clients=$response->fetchAll(PDO::FETCH_ASSOC);
return $chats;
}

public function insertChats(){
  $req = $bdd->prepare('INSERT INTO chats(nom, age, sexe, couleur)
  VALUES(:nom, :age, :sexe, :couleur)');
  $req->execute(array(
      'nom' => $_POST['nom'],
      'age' => $_POST['age'],
      'sexe' => $_POST['sexe'],
      'couleur' => $_POST['couleur']
    ));

return $chats;
}


}


 ?>

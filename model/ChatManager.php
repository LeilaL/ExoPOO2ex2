<?php

class ChatManager {

  public function getBdd() {
      $bdd = new PDO('mysql:host=localhost;dbname=EXOCHATS;charset=utf8', 'root', 'leilalababsa');
      return $bdd;
  }


  public function insertChats(chat $c){
    $req=$this->getBdd()->prepare('INSERT INTO chats(nom, age, sexe, couleur)
    VALUES(:nom, :age, :sexe, :couleur)');
    // $req->bindValue(':id', getId());
      $req->bindValue(':nom', $c->getNom());
      $req->bindValue(':age', $c->getAge(), PDO::PARAM_INT);
 $req->bindValue(':sexe', $c->getSexe(), PDO::PARAM_STR);
 $req->bindValue(':couleur', $c->getCouleur(), PDO::PARAM_STR);
    $req->execute();
    }

public function getAllChats(){
$response=$this->getBdd()->query("SELECT * FROM chats");
$chats=$response->fetchAll(PDO::FETCH_ASSOC);
return $chats;
}



}


 ?>

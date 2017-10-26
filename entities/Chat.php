<?php
declare(strict_types=1);

class Chat {
  // protected $id;
  protected $nom;
  protected $age;
  protected $sexe;
  protected $couleur;

const SEXE1 = "Female";
const SEXE2 = "Male";
const COULEUR = [
  1 => "noir",
  2 => "gris",
  3 => "blanc",
  4 => "roux",
  5 => "marron"
];


  // Setters
  // public function setId($id) {
  //   $this->id = $id;
  // }

  public function setNom($nom) {
    if ($nom <= 15) {
      $this->nom = $nom;
    }
  }

  public function setAge($age) {
    if ($age >= 0 && $age <= 30) {
      $this->age = $age;
    }
  }

  public function setSexe($sexe) {
    $this->sexe = $sexe;
  }

  public function setCouleur($couleur) {
    $this->couleur = $couleur;
  }


  //Getters
  // public function getId() {
  //   return $this->id;
  // }

  public function getNom() {
    return $this->nom;
  }

  public function getAge() {
    return $this->age;
  }

  public function getSexe() {
    return $this->sexe;
  }

  public function getCouleur() {
    return $this->couleur;
  }


  //Methods
  public function hydrate($data){
    // var_dump($data);
    foreach ($data as $key => $value) {
      $method = "set" .ucfirst($key);
      if(method_exists($this, $method)){
        $this->$method($value);
      }
    }
  }

  public function __construct($data) {
$this->hydrate($data);
  }


}

 ?>

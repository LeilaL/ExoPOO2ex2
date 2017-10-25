<?php
declare(strict_types=1);

class Chat {
  protected $id;
  protected $name;
  protected $age;
  protected $sexe;
  protected $couleur;

const SEXE1 = "F";
const SEXE2 = "M";
const COULEUR = [
  1 => "noir",
  2 => "gris",
  3 => "blanc",
  4 => "roux",
  5 => "marron"
]
  //Setters
  public function setId($id) {
    $this->id = $id;
  }

  public function setName($name) {
    if ($name.length <= 15) {
      $this->name = $name;
    }
  }

  public function setAge(int $age) {
    if ($age >= 0 && $age <= 30) {
      $this->age = $age;
    }
  }

  public function setName($sexe) {
    $this->sexe = $sexe;
  }

  public function setCouleur($couleur) {
    $this->couleur = $couleur;
  }


  //Getters
  public function getId() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
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
    var_dump($data);
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

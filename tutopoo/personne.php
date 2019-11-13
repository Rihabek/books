<?php
  class Persone   // une class personne qui declare que chaque personne a un nom et prenom et age
  {
    public $firstName;
    public $lastName;
    public $age;

    public function __construct($firstName, $lastName, $age)  // public $nom;
    {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->age = $age;      //class public tout le monde a l'acces a cette class
    }

    public function danser()
    {
      echo $this->age . " " . $this->lastName . " est entrain de danser " . PHP_EOL;

    }
    public function fullName(){
      return $this->firstName . " " . $this->lastName; // return sert à pouvoir réutiliser la méthode plus tard, pas echo
    }
  }

  $hasna = new Persone('Hasna', 'abrakbni', 90) ;      // ICI ON DECLARE LES PERSONNE ET ON L'AFFICHE
  $toto = new Persone('toto', 'tatat', 15);

  $hasna->danser();
  $toto->danser();

  $nomCompletDeHasna = $hasna->fullName(); // on peut réutiliser x fois la variable
  $nomCompletDeToto = $toto->fullName();

  echo $nomCompletDeHasna . PHP_EOL;
  echo $nomCompletDeToto . PHP_EOL;
 ?>

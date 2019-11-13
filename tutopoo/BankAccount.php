<?php

class BankAccount
{
  public $accountNumber;
  public $balance = 0;

  public function __construct ($accountNumber)

  {
    $this->accountNumber = $accountNumber;
  }
  public function setBalance($balance)
  {
    if($balance < 10000) {
      throw new Exception("l'argent est trop petit");
    }
    $this->balance = $balance;
  }
}

$compteBancaireDeHonore = new BankAccount("135476543687");
$compteBancaireDeHonore-> setbalance = (50000);

var_dump($compteBancaireDeHonore->balance);


 ?>

<?php

class User{
  public $voornaam;
  public $achternaam;
  public $geboortedatum;

//De variabelen met een hoofdletter X geven aan dat dit niet exact dezelfde variabelen zijn als hierboven.
  public function __construct($voornaamX, $achternaamX, $geboortedatumX) {
    $this->voornaam = $voornaamX;
    $this->achternaam = $achternaamX;
    $this->geboortedatum = $geboortedatumX;
  }
}

$user = new User("Jesper", "Borst", "13-05-2003");
echo $user->voornaam.", ";
echo $user->achternaam.", ";
echo $user->geboortedatum;
 ?>

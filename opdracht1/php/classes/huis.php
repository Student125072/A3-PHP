<?php

include 'woz.php';
include 'belasting.php';

class Huis {

    private $kamers; // integer
    private $toiletten; // integer
    private $verwarming; // boolean
    private $typeVerwarming; // String
    private $straatnaam; // String
    private $huisnummer; // integer
    private $plaatsnaam; // String
    private $oppervlakte; // integer
    private $wozWaarde; // integer
    private $belasting; // WOZWaarde []
    private $belast; // integer

    public function __construct ($straatnaam, $huisnummer, $plaats) {
      $this->straatnaam = $straatnaam;
      $this->huisnummer = $huisnummer;
      $this->plaatsnaam = $plaats;
      $this->wozWaarde = 150000;
      $belasting = array('','','');
    }

    //Get functions
    public function getKamers() {
      return $this->kamers;
    }

    public function getToiletten () {
      return $this->toiletten;
    }

    public function getVerwarming () {
       return $this->Verwarming;
     }

    public function getTypeVerwarming () {
      return $this->typeVerwarming;
    }

    public function getStraatnaam () {
      return $this->straatnaam;
     }

    public function getHuisnummer () {
      return $this->huisnummer;
     }

    public function getPlaatsnaam () {
      return $this->plaatsnaam;
    }

    public function getOppervlakte () {
      return $this->oppervlakte;
    }

    public function getWozWaarde () {
      return $this->wozWaarde;
    }

    //Set functions
    public function setKamers ($x) {
      $this->kamers = $x;
    }

    public function setToiletten ($x) {
      $this->toiletten = $x;
    }

    public function setVerwarming ($x) {
      $this->Verwarming = $x;
    }

    public function setTypeVerwarming ($x) {
      $this->typeVerwarming = $x;
    }

    public function setStraatnaam ($x) {
      $this->straatnaam = $x;
    }

    public function setHuisnummer ($x) {
      $this->huisnummer = $x;
     }

    public function setPlaatsnaam ($x) {
      $this->plaatsnaam = $x;
    }

    public function setOppervlakte ($x) {
       $this->oppervlakte = $x;
     }

    public function setWozWaarde ($x) {
      $this->wozWaarde = $x;
    }


    public function berekenBelasting() {
      $belast = new Belasting();
      $wozclasses = array(new WOZ(PHP_INT_MIN, 600, 100000),
                          new WOZ(100000, 2000, 200000),
                          new WOZ(200000, 6000, PHP_INT_MAX));
      // $this->plaatsnaam == null, $this->belasting == null
      $waarde = $belast->berekenBelasting($this->wozWaarde, $this->kamers, $this->plaatsnaam, $wozclasses);
      return $waarde;
    }

    public function show_info() {
      echo "<div>
               <form class=\"input_huis\" action=\"index.php\" method=\"post\">
                 <span class=\"out_span\">Aantal kamers: </span>
                   <div> $this->kamers </div> <br>
                 <span class=\"out_span\"> Aantal toiletten: </span>
                   <div> $this->toiletten </div> <br>
                 <span class=\"out_span\"> Verwarming: </span>
                 <!-- dropdown menu\'s -->
                   <!-- wel of geen verwarming -->
                   <div> $this->verwarming </div>
                   <!-- type verwarming -->
                   <div> $this->typeVerwarming </div>
                   <br>
                 <span class=\"out_span\"> Straatnaam en huisnummer: </span>
                   <div> $this->straatnaam </div>
                   <div> $this->huisnummer </div>
                 <br>
                 <span class=\"out_span\"> Plaatsnaam: </span>
                   <div> $this->plaatsnaam </div>
                   <br>
                 <span class=\"out_span  \"> Oppervlakte: </span>
                   <div> $this->oppervlakte </div>
                   <br>
                 <span class=\"out_span  \"> Woz waarde: </span>
                   <div> $this->wozWaarde </div>
                   <br>
                 <span class=\"out_span\"> Belasting: </span>
                   <div> " . $this->berekenBelasting() . " </div>
             </div>";
    }
  }

    ?>

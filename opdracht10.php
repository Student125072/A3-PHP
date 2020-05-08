<?php

  //probeer alle code uit inheritance uit.


    class User {
      protected $_username;

        public function __construct($name) {
          $this->_username = $name;
        }

        public function getUsername() {
          return $this->_username;
        }
    }

    class Customer extends User {
      private $_customerId;

      public function __construct($username, $customerId) {
        $this->_username = $username;
        $this->_customerId = $customerId;
      }

      public function getUsername() {
        if ($this->_username == 'Pieter') {
          return parent::getUsername();
        }
        else {
          return "De gebruikersnaam is:" .$this->_username;
        }
      }
    }

    $pieter = new Customer('Pieter', 1);
    $klaas = new Customer('Klaas', 2);
    echo $pieter->getUsername(). '</br>' .$klaas->getUsername();
 ?>

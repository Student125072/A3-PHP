<?php

    class User{

      private $voornaam;
      private $achternaam;
      private $geboortedatum;

        // Setters
        public function setUserNaam($name)
        {
          $this->voornaam = $name;
        }

        public function setUserAchternaam($achternaam)
        {
          $this->achternaam = $achternaam;
        }

        public function setUserGeboortedatum($geboortedatum)
        {
          $this->geboortedatum = $geboortedatum;
        }
        // Getters
        public function getUserNaam()
        {
          return $this->voornaam;
        }

        public function getUserAchternaam()
        {
          return $this->achternaam;
        }

        public function getUserGeboortedatum()
        {
          return $this->geboortedatum;
        }

    }

          //de waarden meegeven aan de set
          $user = new User();
          $user->setUserNaam("Jesper, ");
          $user->setUserAchternaam("Borst, ");
          $user->setUserGeboortedatum("13 mei 2003");

          echo $user->getUserNaam();
          echo $user->getUserAchternaam();
          echo $user->getUserGeboortedatum();
 ?>

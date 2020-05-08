<?php
  class Card {
    private $number;
    private $state = "closed";
    public function __construct($number){
      $this->number = $number;
    }

    public function getHTML(){
      switch ($this->state) {
        case 'open':
          return "<img src=\"img/card" . $this->number . ".svg" . "\" height=\"50px\">";
          break;
        case 'guessed':
          return "<img class=\"guessed\" src=\"img/card" . $this->number . ".svg" . "\" height=\"50px\">";
          break;
        default:
          return "<img src=\"img/card_back.jpg" . "\" height=\"50px\">";
          break;
      }
    }

    public function turn(){
      if($this->state == "closed"){
        $this->state = "open";
      } else {
        $this->state = "closed";
      }
    }

    public function getState(){
      return $this->state;
    }

    public function setState($state){
      $this->state = $state;
    }

    public function getNumber(){
      return $this->number;
    }
  }
 ?>

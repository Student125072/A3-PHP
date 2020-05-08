<?php
class WOZ{
  private $min;
  private $max;
  private $belasting;

  public function __construct ($min, $belasting, $max) {
    $this->min = $min;
    $this->max = $max;
    $this->belasting = $belasting;
  }

  public function isCorrect ($current) {
    if ($current > $this->min && $current <= $this->max) {
      return $this->belasting;
    } else {
      return -1;
    }
  }

}

 ?>

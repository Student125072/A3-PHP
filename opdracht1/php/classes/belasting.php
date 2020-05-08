<?php
include_once "woz.php";

class Belasting {

  public function berekenBelasting($wozWaarde, $kamers, $stad, $wozWaardes) {
    $i = 0;
    $waarde = 0;
    while ($i < 3) {
      $waarde = $wozWaardes[$i]->isCorrect($wozWaarde);
      if ($waarde > -1) {
        break;
      }
      $i++;
    }

    switch ($kamers) {
      case 1:
        $waarde += 100;
        break;
      case 2:
        $waarde += 300;
        break;
      default:
        $waarde += 800;
        break;
    }
    $steden = array('amsterdam', 'rotterdam', 'groningen');
    $stad = strtolower($stad);
  foreach ($steden as $plek) {}
    if ($stad == $plek) {
      $waarde += 1000;
    }
    return $waarde;
  }


  }

 ?>

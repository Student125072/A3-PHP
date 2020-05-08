<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title>Memory</title>
  </head>
  <body>

    <h1 class="memTxt">Memory Game</h1>



  <div class="main">
    <?php
    //Deze require verwijst naar de autoload.
    require_once("php/inc/default.inc.php");

    //Start een nieuwe Game
    //Start nieuw spel als end is aangeklikt
    if(isset($_GET['end'])){
      $game = new Game(true);
    } else {
      $game = new Game(false);
    }
    //klikken kaart verwerken
    if(isset($_GET['card'])){
      $game->turnCard($_GET['card']);
    }
    //zet kaarten op pagina
    for($c=0; $c < $game->countCards(); $c++){
      echo "<a href=\"?card=$c\">" . $game->getCard($c)->getHTML() . "</a>";
    }
    //sla huidige game op
    $game->saveState();

    if ($game->getFinished()) {
      echo "Gewonnen.";
    }
    ?>
  </div>


    <a href="?end"><button type="button" name="button">Restart</button></a>

  </body>
</html>

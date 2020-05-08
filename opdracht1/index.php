<?php
require 'php/classes/huis.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eindopdracht 1 | PHP 3</title>
  </head>
  <body>

    <form action="index.php" method="post">
      <span class="in_span" id="kamers">Aantal kamers: </span> <input type="number" name="kamers" class="in_int  form-control col-12" id="kamers" placeholder="2"><br>
          <span class="in_span" id="toiletten"> Aantal toiletten: </span> <input type="number" name="toiletten" class="in_int  form-control col-12" id="toilet" placeholder="1"><br>
          <span class="in_span" id="verwarming"> Verwarming: </span>
          <!-- dropdown menu's -->
            <!-- wel of geen verwarming -->
          <select class="dropdown form-control col-12" id="verwarming_bool" name="verwarming_bool">
            <option id="true" class="options" value="true"> ja </option>
            <option id="fasle" class="options" value="false"> nee </option>
          </select>
            <!-- type verwarming -->
          <select name="verwarming_soort" id="type_verwarming" class="dropdown  form-control col-12">
            <option class="text_dampend" selected> Selecteer je type verwarming </option>
            <option value="radiator" id="rad" class="options"> Radiator </option>
            <option value="vloer" id="vloer" class="options"> vloerverwarming </option>
            <option value="lucht" id="lucht" class="options"> Luchtverwarming </option>
            <option value="wand" id="wand" class="options"> Wandverwarming </option>
          </select><br>
          <span class="in_span  " id="straatnaam"> Straatnaam en huisnummer: </span>
          <input type="text" name="straat" class="in_str form-control col-12" id="straat" placeholder="aapenlaan">
          <input type="number" name="huisnummer" class="in_int form-control col-12" id="huisnummer" placeholder="42"><br>
          <span class="in_span  " id="plaatsnaam"> Plaatsnaam: </span> <input type="text" name="plaats" class="in_str  form-control col-12" id="plaats" placeholder="Assen"><br>
          <span class="in_span  " id="oppervlakte"> Oppervlakte: </span> <input type="text" name="opp" class="in_int  form-control col-12" id="oppervlak" placeholder="1500"><br>
          <span class="in_span  " id="woz_waarde"> Woz waarde: </span> <input type="number" name="woz" placeholder="150.000" class=" form-control col-12"> <br>
          <button type="submit" class="btn-ligth btn-md">Confirm</button>
          <button type="reset"class="btn-ligth btn-md">Leeg velden</button>
    </form>

<?php
    if (isset($_POST["straat"])) {
      $huis = new Huis($_POST["straat"], $_POST["huisnummer"], $_POST["plaats"]);
      $huis->setKamers($_POST["kamers"]);
      $huis->setWozWaarde($_POST["woz"]);
      $huis->setToiletten($_POST["toiletten"]);
      $huis->setVerwarming($_POST["verwarming_bool"]);
      $huis->setTypeVerwarming($_POST["verwarming_soort"]);
      $huis->setOppervlakte($_POST['opp']);
      $huis->show_info();
    }
?>

  </body>
</html>

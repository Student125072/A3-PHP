<?php
  //Hier staat het path wat gebruikt word als URL in localhost
  define("WEB_ROOT", "A3PHP/Eindopdrachten/");
  //Hier staat het volledige path (htdocs+A3PHP/Eindopdrachten).
  define("LOCAL_ROOT", $_SERVER["DOCUMENT_ROOT"] . "/" . WEB_ROOT);
  //Hier worden alle classes automatisch geload.
  spl_autoload_register(function ($class_name) {
    include LOCAL_ROOT . "php/classes/" . $class_name . '.class.php';
  });
 ?>

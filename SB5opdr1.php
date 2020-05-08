<?php


  spl_autoload_register(function ($User) {
    require "oefening4.php";
  });

  $user = new User();

 ?>

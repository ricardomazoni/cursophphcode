<?php

  function __autoload($nomeClasse){
    var_dump("$nomeClasse.php");
    require_once("$nomeClasse.php");

  }

  $carro = new DelRey();

  $carro->acelerar(80);

 ?>

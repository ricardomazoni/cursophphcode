<?php
  function ola($texto){
    return "Olá  ".$texto;
  }

  function ola2($texto = 'mundo'){
    return "Olá mundo ".$texto;
  }

  function ola3(){
    $argumentos = func_get_args();

    return $argumentos;
  }

  //passagem de parametro por referencia
  //altera o endereço de memoria
  //diferente de variaveis global

  $a = 10;
  function ola4(&$b){
    $b += 50;
    return $b;
  }

  echo ola4($a);
  echo "<br>";
  echo ola4($a);
  echo "<br>";

  echo $a;

  //var_dump(ola3("Bom dia ", "Joao"));


 ?>

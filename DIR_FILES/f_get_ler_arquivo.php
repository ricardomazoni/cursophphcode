<?php

$filename = "usuarios.csv";

if(file_exists($filename)){
  $file = fopen($filename,"r");

  //fgtest - Pega o cabeçalho
  //explode retirar as virgulas...e quebra cada campo num indice do array

  $headers = explode(",",fgets($file));

  $data = array();

  while ($row = fgets($file)) {
    $rowData = explode(",",$row);


  }
  fclose($file);

   //var_dump($headers);



}

 ?>

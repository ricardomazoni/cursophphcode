<?php

$filename = "usuarios.csv";

if(file_exists($filename)){
  $file = fopen($filename,"r");

  //fgtest - Pega o cabeçalho
  //explode retirar as virgulas...e quebra cada campo num indice do array
  // Ao ler o arqui é posicionado para a proxima linha
  $headers = explode(",",fgets($file));

  $data = array();

  while ($row = fgets($file)) {
    $rowData = explode(",",$row);
    $linha = array();

    for ($i=0; $i < count($headers); $i++) {
      $linha[$headers[$i]] = $rowData[$i];

    }
    array_push($data,$linha);

  }
  fclose($file);

  echo json_encode($data);


   //var_dump($headers);



}

 ?>

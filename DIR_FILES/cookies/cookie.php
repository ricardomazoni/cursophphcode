<?php


$data = array(
  "empresa"=>"Hcode Treinamentos"
);
setcookie("NOME_DO_CLIENTE",json_encode($data),time()+3600);

echo "ok";


 ?>

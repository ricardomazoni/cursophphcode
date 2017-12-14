<?php


if(isset($_COOKIE["NOME_DO_CLIENTE"])){
  $obj = json_decode($_COOKIE["NOME_DO_CLIENTE"]);

  echo $obj->empresa;


}


 ?>

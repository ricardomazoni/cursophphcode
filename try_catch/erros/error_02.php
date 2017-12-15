<?php
/*
  error_reporting - NÃO REPORTAR O ERRO PADRAO DO php
*/
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

 ?>

<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Ricardo");
$cad->setEmail("ricardomazoni@mazoni.com");
$cad->setSenha("12345");

$cad->registrarVenda();


?>

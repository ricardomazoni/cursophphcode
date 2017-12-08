<?php

  class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($logr,$num,$cid){
      $this->logradouro = $logr;
      $this->numero = $num;
      $this->cidade = $cid;

    }

    public function __destruct(){
      var_dump("DESTRUIR");
    }

    public function __toString(){
      return $this->logradouro.",".$this->numero.",".$this->cidade;

    }
  }

  $meuEndereco = new Endereco("Rua 1","0023","Osasco");

  echo "<br>";
  echo $meuEndereco;
  echo "<br>";

  var_dump($meuEndereco);

  unset($meuEndereco);

 ?>

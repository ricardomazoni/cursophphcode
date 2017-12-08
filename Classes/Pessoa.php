<?php

  class Pessoa{
    public $nome;

    public function falar(){
      return "O nome é ".$this->nome;
    }


  }

  $nom_pessoa = new Pessoa();
  $nom_pessoa->nome = "João";


  echo $nom_pessoa->falar();



 ?>

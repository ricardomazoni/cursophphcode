<?php

  class Pessoa{
    public $nome = "Rasmus Lerdof";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

      echo $this->nome."<br>";
      echo $this->idade."<br>";
      echo $this->senha."<br>";

    }
  }

  class Programador extends Pessoa{

    public function verDados(){

      // funcao que informa a classe que fez a instancia


      echo $this->nome."<br>";
      echo $this->idade."<br>";
      echo $this->senha."<br>";

      echo "<b>".get_class($this)."<b/><br/>";
      

    }

  }

  $pessoa = new Programador();

  $pessoa->verDados();

 ?>

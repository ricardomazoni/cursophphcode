<?php


interface Veiculo{

  public function acelerar($acelerar);
  public function frenar($frenar);
  public function trocarMarcha($trocarMarcha);

}


abstract class Automovel implements Veiculo{
  public function acelerar($acelerar){

    echo "O veículo acelerou até ".$acelerar." km/h";

  }
  public function frenar($frenar){
    echo "O veículo frenou até ".$frenar." km/h";

  }
  public function trocarMarcha($trocarMarcha){
    echo "O veículo engatou a ".$trocarMarcha." marcha";
  }

}

?>

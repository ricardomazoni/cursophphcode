<?php

$pessoa = array('nome' => 'Joao',
                'idade' => 20);

// Passagem por referencia,
// alterando o valor da mesma ao usar o &
foreach ($pessoa as &$value) {

  if(gettype($value)==='integer') $value +=10;

  echo $value.'<br>';
  # code...
}

print_r($pessoa);


 ?>

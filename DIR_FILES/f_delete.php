<?php

$file = fopen("c:/temp/teste.txt","w+");

fclose($file);

//unlink para remover o arquivo
unlink("c:/temp/teste.txt");

echo "Arquivo $file excluido com sucesso ";


 ?>

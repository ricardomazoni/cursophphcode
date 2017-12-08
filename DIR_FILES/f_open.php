<?php

//w+ é para escrever write. w+ escreve somente uma vez
//a+ fica adicionando 
$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s")."\r\n");

fclose($file);

echo "Arquivo criado com sucesso!!";




 ?>
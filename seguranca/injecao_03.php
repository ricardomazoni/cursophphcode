<?php 
/*
0 - não existe permissão
1 - tem permissao de execucao
2 - tem permissao de gravação
3 - tem permissao de execucao/gravação
4 - tem permissao de leitura
5 - tem permissao de execucao/leitura
6 - tem permissao de gravação/leitura
7 - tem permissao de gravação/leitura/execução



*/

$pasta = "folder";
$permissao =  "0775";

if (!is_dir($pasta)) mkdir($pasta,$permissao)



?>
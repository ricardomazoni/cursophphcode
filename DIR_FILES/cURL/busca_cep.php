<?php

$cep = "01310100";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

/*

$CH = LINK DE ACESSO
CURLOPT_RETURNTRANSFER = ESPERANDO RETORNO
RETORNO 0 - SEM RETORNO
        1 - ESPERA RETORNO
- curl_setopt(INCIO, ESPERANDO RETORNO,1(ESPERANDO RESPOSTA)- )
*/

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

json_encode($data);

print_r($data);


 ?>

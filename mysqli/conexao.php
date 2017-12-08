<?php

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){
  echo "Error:".$conn->connect_error;
  exit;
}
//Preparar o camonando para enviar para o banco de dados
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?,?)");

//esperando os dados para ?
$stmt->bind_param("ss",$login,$pass);
//pode ser passado depois, porque o execute nao foi chamado.
$login = "user";
$pass  = "12345";

$stmt->execute();
$login = "root";
$pass  = "12345";
$stmt->execute();

 ?>

<?php

   require_once("config.php");

   //Limpar variaveis de sessao
   session_unset($_SESSION['nome']);

   echo $_SESSION['nome'];

   echo "<br>";

   echo session_id();

   //Destroir variaveis de sessao

   session_destroy();


 ?>

<?php 

/*
	id de sessão
*/
session_start();


//depois de verificar o id e senha inicia o ID
session_destroy();

session_start();
session_regenerate_id();

echo session_id();



 ?>
<?php 

//Verifcicar se o diretorio existe

$name = "images";

if(!is_dir($name)){
	mkdir($name);
	echo " diretorio: ".$name." criado com sucesso";

}else{
	//rmdir($name);
	echo "Ja existe o diretorio ".$name." Foi removido";

}

 


 ?>
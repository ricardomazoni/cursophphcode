<?php 

//Scanar o diretorio

$images = scandir("images");

$data = array();

//var_dump($images);

foreach ($images as $img) {
	//onde esta procurando dentro de array.	
	if (!in_array($img,array(".",".."))) {
		$filename = "images".DIRECTORY_SEPARATOR.$img;

		$info = pathinfo($filename);

		//pega o nome do arquivo em bytes

		$info["size"] = filesize($filename);

		//ultima modificação do arquivo
		$info["modified"] = date("d/m/Y H:i:s",filemtime($filename));

		//acessar a imagem informada

		$info["url"] = "http://localhost/CursoPHPCompleto/DIR_FILES/".str_replace("\\", "/", $filename);




		//var_dump($info);
		array_push($data, $info);
	}
}

echo json_encode($data)

 ?>
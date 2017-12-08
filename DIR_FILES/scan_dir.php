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

		//var_dump($info);
		array_push($data, $info);
	}
}

echo json_encode($data)

 ?>
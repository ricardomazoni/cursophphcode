<?php

$image = imagecreatefromjpeg("imagens/certificado.jpg");

$titleColor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image,100,100,100);
$nome = "Ricardo Mazoni";


imagestring($image,5,450,150,"CERTIFICADO",$titleColor);
imagestring($image,5,440,350,"Ricardo Mazoni",$titleColor);
	imagestring($image,3,440,370,utf8_decode("Concluído em: ").date("d/m/Y"),$titleColor);

header("Content-type: image/jpeg");


imagejpeg($image,"imagens/certificado-".$nome."-".date("Y-m-d").".jpg");

imagedestroy($image);

 ?>

<?php

$image = imagecreatefromjpeg("imagens/certificado.jpg");

$titleColor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image,100,100,100);
$nome = "Ricardo Mazoni";

$cabecalho = "CERTIFICADO";
$nome      = "Ricardo Mazoni";

imagettftext($image,32,0,320,250,$titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","CERTIFICADO");
imagettftext($image,32,0,375,350,$titleColor,"fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Ricardo Mazoni");
imagestring($image,3,440,370,utf8_decode("Concluído em ").date("d/m/Y"),$titleColor);

header("Content-type: image/jpeg");


imagejpeg($image);


imagejpeg($image,"imagens/certificado-".$nome."-".date("Y-m-d").".jpg");

imagedestroy($image);

 ?>

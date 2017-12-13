<?php

$filename = "images/logo.png";

/*if (is_file($filename)){
  echo "Arquivo $filename existe";
}else {
  echo "Arquivo $filename NÃO existe";
}

echo "<br/>";*/

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64_encode =  "data: ".$mimetype."; base64, ".$base64;

 ?>

 <a href="<?=$base64_encode?>" target="_blank"> Link para Imagem </a>

 <img src="<?=$base64_encode?>"></script>

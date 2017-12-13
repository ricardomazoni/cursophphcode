<?php

$dir_img = "c:/temp/images/";
if (!is_dir($dir_img)) mkdir($dir_img);

foreach (scandir($dir_img) as $item) {
  if (!in_array($item, array('.','..'))){
    unlink($dir_img.$item );
  }
}

echo "Diretorio $dir_img apagou as imagens"

 ?>

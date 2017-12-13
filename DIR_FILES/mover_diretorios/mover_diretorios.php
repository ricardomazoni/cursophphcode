<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$file_name = "README.txt";

if(!file_exists($dir1).DIRECTORY_SEPARATOR .$file_name){
  $file = fopen($dir1.DIRECTORY_SEPARATOR .$file_name,"w+");
  fwrite($file,date("Y-m-d H:i:s"));
  fclose($file);
}

rename($dir1.DIRECTORY_SEPARATOR.$file_name,
       $dir2.DIRECTORY_SEPARATOR.$file_name);

echo "arquivo enviado de $dir1.DIRECTORY_SEPARATOR.$file_name ";
echo "<br/>para $dir2.DIRECTORY_SEPARATOR.$file_name ";
 ?>

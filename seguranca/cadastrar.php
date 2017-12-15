<?php 

$email = $_POST["inputEmail"];

var_dump($_POST);

$ch = curl_init();

curl_setopt($sh, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($sh, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($sh, CURLOPT_SSL_VERIFYPEER,0);

curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query(array(
	"secret"=>"6Lc5ND0UAAAAACiT9cZZxu4XMQXPhmaj0gX_6mB-",
	"response"=>$_POST["g-recaptcha-response"],
	"remoteip"=>$_SERVER["REMOTE_ADDR"]
)));


 ?>
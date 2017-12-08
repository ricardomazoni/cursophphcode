<?php
  function teste($callback){
    //processo lento
    $callback();

  }

  /*teste(function(){
    echo "terminou";

  });*/

  $fn = function($a){
    var_dump($a);
  };

  $fn("Oi");



 ?>

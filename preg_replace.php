<?php

$subject = 'hola mr. Robert, Esta comparando PHP 7';

$replaced = preg_replace_callback_array([

      '/mr./' => function ($match){
                return ucwords($match[0]);
      '/mr./' => function ($match){
                return ucwords($match[0]);
      },
],
$subject);

echo PHP_EOL , $replaced;


 ?>

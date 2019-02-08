<?php
function show_layout($header, $content, $footer)
{
  yield from show_header();
  yield '<p>' . $content . '</p>';
  yield '<p>' . $footer . '</p>';
  return '<script>alert("Página Cargada");</script>';

}

function show_header(){
    yield 'Buttom 1';
    yield 'Buttom 2';
    yield 'Buttom 3';
}


$header = 'Encabezado';
$content = 'contenido';
$footer = 'Pie de Página';

$generador = show_layout($header, $content, $footer);

foreach( $generador as $value ){
  echo "$value<br/>";
}

echo $generador->getReturn();

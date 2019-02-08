<?php

declare(strict_types=1);

function add( int $number1, int $number2 ) : int
{
    return $number1 + $number2;
}

echo "Este es el Valor de la suma " . add(7,1);

function greet( $name ) : string
{
    return $name;
}

echo "</br>";

echo greet('Robert');
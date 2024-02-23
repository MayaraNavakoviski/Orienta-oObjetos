<?php


function CalcularMedia($A, $B, $C) {

    $media = (($A * 3) + ($B * 5) + ($C * 2)) / 10;
    return $media;
}


$A =  readline("Digite o valor de A: ");
$B =  readline("Digite o valor de B: ");
$C =  readline("Digite o valor de C: ");


$media = CalcularMedia($A, $B, $C);


echo "A média dos valores informados é: " . $media . "\n";

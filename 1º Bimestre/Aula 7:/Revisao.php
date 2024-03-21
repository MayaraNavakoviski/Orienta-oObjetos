<?php


function CalculaArea(array $vetor){
    $area = $vetor["base"] * $vetor["altura"];
    return $area;
}

$retangulos = array();

for($i = 0; $i < 5; $i++) {
    $base = readline("Me informe um número para ser a base de um retângula: " . "\n");
    $altura = readline("Me informe um número para ser a altura de um retângula: " . "\n");

     $ret = array("base" => $base, "altura" => $altura);

    $ret["base"] = $base;
    $ret["altura"] = $altura;
    array_push($retangulos, $ret);
}

foreach($retangulos as $r){
    // $area  = $r["base"] * $r["altura"];
    $area = CalculaArea($r);
    echo "A área do retãngulo é: " . $area . "\n";

}


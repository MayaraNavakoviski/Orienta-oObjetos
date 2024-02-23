<?php


function VerificandoPrimo($num) {
    if ($num < 2) {
        return false; 
    }
    
    
    for ($i = 2; $i <= ($num)/2; $i++) {
        if ($num % $i == 0) {
            return false; 
        }
    }
    
    return true;
}

while (true) {
    $num = readline("Informe um número para verificar se é primo (se um número menor que 2 for digitado, o programa encerrará): " . "\n");
    
    if ($num < 2) {
        echo "Programa Encerrado" . "\n";
        break;
    }
    
    if (VerificandoPrimo($num)) {
        echo $num . " é um número primo." . "\n";
    } else {
        echo $num . " não é um número primo." . "\n";
    }
}

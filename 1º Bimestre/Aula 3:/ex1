<?php

function calcularFatorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * calcularFatorial($n - 1);
    }
}

while (true) {
    $num =  readline("Informe um número para calcular o fatorial (se o número digitado for 0, o programa encerrará): ");
    
    if ($num == 0) {
        echo "O Programa foi Encerrado..." . "\n";
        break;
    }
    
     if ($num < 0) {
        echo "Não se pode calcular o fatorial para números negativos." . "\n";
    continue;
    }
    
    $resultado = calcularFatorial($num);
    echo "O fatorial de " . $num . " é " . $resultado . "\n";
}

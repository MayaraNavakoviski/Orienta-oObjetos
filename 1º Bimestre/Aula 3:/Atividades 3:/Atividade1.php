<?php


function CalcularY($x) {
    
        $y = 5 * $x + 2 * $x + 3;
        return $y;
}

for ($i = 0; $i < 5; $i++) {
     $x = readline("Informe um valor para X: ");
     $y = CalcularY($x);
     echo "Para x = " .  $x . ", o valor de y é " .$y . "\n";
}

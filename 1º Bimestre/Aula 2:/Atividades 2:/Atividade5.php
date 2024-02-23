<?php


   $Num1 = 0;
   $Num2 = 0;


   $Num1 = readline("Me informe um número: " . "\n");
   $Num2 = readline("Me informe um número: " . "\n");


   for ($i = $Num1 + 1; $i < $Num2 ; $i++) { 
    if ($i % 5 == 0) {

        print "$i" . " é um número divisível por 5."  . "\n";
    }
}

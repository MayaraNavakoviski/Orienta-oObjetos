<?php


   $NumPar = 0;
   $NumImp = 0;


   for ($i=0; $i <= 10 ; $i++) { 
       $Nums = readline("Me informe 10 números: " . "\n");

    if ($Nums % 2 == 0) {
        $NumPar = $NumPar + 1;
    } else {
        $NumImp = $NumImp + 1;
    }

   }

   echo "A quantidade de números pares informados foi: " . $NumPar . "\n" . "e a quantidade de números impares informados foi:  " . $NumImp . "\n";

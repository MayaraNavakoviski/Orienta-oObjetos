<?php

   $nums = [];


  for($i = 0; $i < 10; $i++) {
      $n =  readline("Informe um número:  " . "\n");
       $nums[$i] = $n;
}


   $min = PHP_INT_MAX;
   $max = PHP_INT_MIN;


    for($i = 0; $i < 10; $i++) {
    
    if($nums[$i] < $min) {
        $min = $nums[$i];
    }

    
    if($nums[$i] > $max) {
        $max = $nums[$i];
    }
}


echo "O menor valor informado é: " . $min . "\n";
echo "O maior valor  informado é: " . $max;

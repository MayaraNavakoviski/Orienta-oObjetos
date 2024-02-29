<?php 

   
  $vetor1 = [];
  $vetor2 = [];

  for ($i=0; $i < 5; $i++) { 

      $letras = readline("Informe uma letra: " . "\n");
      $vetor1[$i] = $letras;

  }

  $vetor2 = $vetor1;

  foreach ($vetor2 as $value) {
     echo $value . ",  ";
  }

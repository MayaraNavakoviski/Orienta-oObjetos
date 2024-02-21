<?php

  $Alunos = 0;
  $Valor = 0;
  $ValorTotal = 0;


   $Alunos = readline("Me informe o total de alunos que há em sua sala: " . "\n");

   for ($i=0; $i <= $Alunos; $i++) { 
        $Valor = readline("Qual é o valor que poderá contribuir? " . "\n");
        $ValorTotal = $Valor + $ValorTotal;
      if ($Valor == 0) {
          break;
     }

}

        echo "O valor arrecadado para a confraternização é de: " . "\n" . $ValorTotal;


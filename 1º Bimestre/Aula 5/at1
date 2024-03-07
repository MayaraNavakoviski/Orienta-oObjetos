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

     $VetorP = array();

     $num = 5;


     while ($num != 0 ) {
            $num = readline("Informe um número, o programa informará se é um número primo (se o número digitado for 0, o progarama se encerrará e ao final o programa irá mostrar todos os primos digitados): " . "\n");
            VerificandoPrimo($num);
             
            if (VerificandoPrimo($num) == true) {
               print "O número informa é um número primo." . "\n";
               array_push($VetorP,$num);
            } else{
               echo "O número informado não é primo. " . "\n";
            }
}
        foreach ($VetorP as $value) {
           print( $value . "\n");
    }



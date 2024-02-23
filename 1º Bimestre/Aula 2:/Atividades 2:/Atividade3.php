<?php 


  $Num1 = 0;
  $Num2 = 0;
  $Num3 = 0;


  $Num1 = readline("Me informe um número: " . "\n");
  $Num2 = readline("Me informe mais um número: " . "\n");
  $Num3 = readline("Me informe um último número: " . "\n");


if ($Num3 > $Num1 && $Num2 > $Num1) {
    print "O menor número entre os números informados é o " . $Num1;
}
elseif ($Num1 > $Num2 && $Num3 > $Num2) {
    print "O menor número entre os números informados é o " . $Num2;
}
else{
    print "O menor número entre os números informados é o " . $Num3;
}

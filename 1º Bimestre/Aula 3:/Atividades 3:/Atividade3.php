<?php


function ImprimeDados($nome, $habitantes, $area, $altitude, $estado) {
    echo "$nome|$habitantes|$area|$altitude|$estado";
}

     ImprimeDados(" Foz do Iguaçu ", " 250000 ", " 500km² ", " 145m ", " Paraná-PR " );
      echo ", " . "\n";
     ImprimeDados(" Cascavel ", " 300000 ", " 420km² ", " 320m ", " Paraná-PR " );
      echo ", " . "\n";
     ImprimeDados(" Chapecó ", " 240000 ", " 120km² ", " 620m ", " Santa Catarina-SC ");
      echo ", " . "\n'";
     ImprimeDados(" Blumenau ", " 330000 ", " 20km² ", " 85m ", " Santa Catarina-SC ");
      echo ", " . "\n";
      ImprimeDados(" Curitiba " , " 1500000 ", " 300km² ", " 850m ", " Paraná-PR ");

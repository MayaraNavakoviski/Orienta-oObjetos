<?php

função  imprimeVetor ( $ vet ) {
    foreach ( $ vet  como  $ v )
        eco  $ v . " | ";
    eco "\n";
}

//Programa principal
$ f1 = array (" Mclaren ", " Willians ", " RBR ", " Ferrari ", " Minardi ");
$ vezes = array (" Grêmio ", " Palmeiras ", " Inter ", " SP ", " Bahia ");
$ frutas = array (" Maça ", " Uva ", " Laranja ", " Limão ", " Abacate ");
$ alunos = array (" Guilherme ", " Petrus ", " Rebeca ", " Maria ", " Felipe ");

imprimeVetor( $ f1 );
imprimeVetor( $ vezes );
imprimeVetor( $ frutas );
imprimeVetor( $ alunos );

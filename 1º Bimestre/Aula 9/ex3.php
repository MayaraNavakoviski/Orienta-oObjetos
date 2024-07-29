<?php

class Retangulo {

    // Atributos //
    public $base;
    public $altura;

    // Constructor //
    function  __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

     // Método //
    function area () {
        $area = $this->base*$this->altura;
        return $area;
    }
    function perimetro () {
        $perimetro = 2*($this->base+$this->altura);
        return $perimetro;
    }

}

// Programa Principal //
for ($i=1; $i < 3; $i++) { 
    $base = readline("Informe a base: \n");
    $altura = readline("Informe a altura: \n");

    $retangulo = new Retangulo ($base, $altura);

    $retangulo-> area();
    echo "A área do " . $i . " retangulo é igual a ". $retangulo-> area() . " cm. ". "\n";
    $retangulo-> perimetro();
    print "O perimetro do " . $i . " retangulo é igual a ". $retangulo-> perimetro() . " cm. " . "\n";
}

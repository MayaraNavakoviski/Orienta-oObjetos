<?php

class Retangulo {

    // Atributos //
    public $base;
    public $altura;

    // Método  //
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

for ($i=1; $i < 3 ; $i++) { 
    $retangulo = new Retangulo();

    $retangulo->base = readline ("Informe a base: " . "\n");
    $retangulo->altura = readline ("Informe a altura: " . "\n");

    $retangulo-> area();
    echo "A área do retangulo " . $i . " é igual a " . $retangulo-> area() . " cm. " . "\n";
    $retangulo-> perimetro();
    echo "O perimetro do retangulo " . $i . " é igual a " . $retangulo-> perimetro() . " cm." . "\n";

}

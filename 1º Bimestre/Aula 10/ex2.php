<?php

class Retangulo{

    // Atributos //

    public $base;
    public $altura;


    // Método //

    function area (){
        $area = $this->base*$this->altura;
        echo "A área do retângulo é " . $area . "\n";
}
    function perimetro () {
        $perimetro = 2*($this->base+$this->altura);
        echo "Já o perimetro é " . $perimetro . "\n";
}

}


// Programa Principal //

$Retangulo = new Retangulo ();
$Retangulo->base = readline("Informe a base do seu retângulo: " . "\n");
$Retangulo->altura= readline("Informe a área do seu retângulo: " . "\n");


$Retangulo->area();
$Retangulo->perimetro();

$Retangulo2 = new Retangulo ();
$Retangulo2->base = readline("Informe a base do seu retângulo: " . "\n");
$Retangulo2->altura= readline("Informe a área do seu retângulo: " . "\n");


$Retangulo2->area();
$Retangulo2->perimetro();

$Retangulo3 = new Retangulo ();
$Retangulo3->base = readline("Informe a base do seu retângulo: " . "\n");
$Retangulo3->altura= readline("Informe a área do seu retângulo: " . "\n");


$Retangulo3->area();
$Retangulo3->perimetro();
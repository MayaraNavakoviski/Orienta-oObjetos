<?php

// Começo da Class //                               

class Calculadora
{
    // Atributos: //
    private $numA;
    private $numB;

    // GETs e SETs : //
    public function getNumA() {
        return $this->numA;
    }

    public function setNumA($numA): self {
        $this->numA = $numA;
        return $this;
    }

    public function getNumB() {
        return $this->numB;
    }

    public function setNumB($numB): self{
        $this->numB = $numB;
        return $this;
    }

    public function soma(){
        return $this->numA + $this->numB;
    }

    public function subtracao(){
        return $this->numA - $this->numB;
    }

    public function multiplicacao(){
        return $this->numA * $this->numB;
    }

    public function divisao() {
        if ($this->numB == 0) {
            return "Erro: divisão por zero";
         }
        return $this->numA / $this->numB;
    }

    public function resto(){
        if ($this->numB == 0) {
            return "Erro: divisão por zero";
        }
        return $this->numA % $this->numB;
    }

    public function getDescricao() {
        return "Soma: " . $this->soma() . "\n" .
               "Subtração: " . $this->subtracao() . "\n" .
               "Multiplicação: " . $this->multiplicacao() . "\n" .
               "Divisão: " . $this->divisao() . "\n" .
               "Resto: " . $this->resto() . "\n";
    }
}
// Fim da Class //

// Programa Principal: //
$calculadora = new Calculadora();
$calculadora->setNumA(readline("Me informe o primeiro número: "));
$calculadora->setNumB(readline("Me informe o segundo número: "));

echo $calculadora->getDescricao();

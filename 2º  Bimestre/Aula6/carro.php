<?php

//  Começo da Class  //
class Carro{
    // Atributos: //
    private $modelo;
    private $marca;
    private $anoFabricacao;
    private $velocidadeMax;

    // GETs e SETS: //
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($modelo): self{
        $this->modelo = $modelo;
        return $this;
    }

    public function getMarca() {
        return $this->marca;
    }
    public function setMarca($marca): self {
        $this->marca = $marca;
        return $this;
    }

    public function getAnoFabricacao() {
        return $this->anoFabricacao;
    }
    public function setAnoFabricacao($anoFabricacao): self {
        $this->anoFabricacao = $anoFabricacao;
        return $this;
    }

    public function getVelocidadeMax() {
        return $this->velocidadeMax;
    }
    public function setVelocidadeMax($velocidadeMax): self {
        $this->velocidadeMax = $velocidadeMax;
        return $this;
    }

    public function getDescricao(){
        return "O carro é um " . $this->getModelo() . "-" . $this->getMarca() . ", fabricado em " . $this->getAnoFabricacao() . ", com velocidade máxima de " . $this->getVelocidadeMax() . "km/h." . "\n";
    }
}
//  Fim da Class  //

// Programa Principal: //
$carros = [];
for ($i=0; $i < 3 ; $i++) { 
    $carro = new Carro();
    $carro->setModelo(readline("Me informe o modelo do carro " . ($i+1) . ": "));
    $carro->setMarca(readline("Me informe a marca do carro " . ($i+1) . ": "));
    $carro->setAnoFabricacao(readline("Me informe o ano de fabricação do carro " . ($i+1) . ": "));
    $carro->setVelocidadeMax(readline("Me informe a velocidade máxima do carro " . ($i+1) . ": "));

    $carros[] = $carro;
}

$velocidadeMaxima = 0;
$carroMaisRapido = null;
$velocidadeMinima = PHP_INT_MAX;
$carroMaisLento = null;

foreach ($carros as $carro) {
    if ($carro->getVelocidadeMax() > $velocidadeMaxima) {
        $velocidadeMaxima = $carro->getVelocidadeMax();
        $carroMaisRapido = $carro;
    }
    if ($carro->getVelocidadeMax() < $velocidadeMinima) {
        $velocidadeMinima = $carro->getVelocidadeMax();
        $carroMaisLento = $carro;
    }
}

echo "O carro mais rápido é: " . $carroMaisRapido->getDescricao();
echo "O carro mais lento é: " . $carroMaisLento->getDescricao();
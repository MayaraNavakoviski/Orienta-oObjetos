<?php

// Começo da Class //
class Veiculo {

    // Atributos //
    private $capacidade;
    private $passagensVendidas;

    // Construct //
    public function __construct($capacidade) {
        $this->capacidade = $capacidade;
        $this->passagensVendidas = 0;
    }

    // GETs e SETs //
    public function getCapacidade() {
        return $this->capacidade;
    }

    public function getPassagensVendidas() {
        return $this->passagensVendidas;
    }

    public function venderPassagem($quantidade) {
        if ($this->passagensVendidas + $quantidade <= $this->capacidade) {
            $this->passagensVendidas += $quantidade;
            return true;
        } else {
            return false;
        }
    }

    public function getDescricao() {
        return "Capacidade do veículo: " . $this->capacidade . "\n" .
               "Passagens vendidas: " . $this->passagensVendidas . "\n";
    }
}
// Fim da Class //

// Programa Principal: //
$capacidade = readline("Digite a capacidade do veículo: ");
$veiculo = new Veiculo($capacidade);

while (true) {
    $quantidade = (int) readline("Quantas passagens você deseja comprar? (0 para sair100): ");
    if ($quantidade == 0) {
        break;
    }

    if ($veiculo->venderPassagem($quantidade)) {
        echo "Passagem vendida com sucesso! Você comprou $quantidade passagem(s).\n";
    } else {
        echo "Não foi possível vender a passagem. Capacidade do veículo excedida.\n";
    }

    echo $veiculo->getDescricao();
}

?>
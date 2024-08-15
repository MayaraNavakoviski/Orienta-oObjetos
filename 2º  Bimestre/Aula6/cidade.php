<?php

// Começo da Class //
class Cidade {

    // Atributos //
    private $nome;
    private $populacao;
    private $area;
    private $idh;
    private $producao;
    private $pib;

    // Construct //
    public function __construct($nome, $populacao, $area, $idh, $producao, $pib) {
        $this->nome = $nome;
        $this->populacao = $populacao;
        $this->area = $area;
        $this->idh = $idh;
        $this->producao = $producao;
        $this->pib = $pib;
    }

    // GETs e SETs //
    public function getNome() {
        return $this->nome;
    }

    public function getPopulacao() {
        return $this->populacao;
    }

    public function getArea() {
        return $this->area;
    }

    public function getIdh() {
        return $this->idh;
    }

    public function getProducao() {
        return $this->producao;
    }

    public function getPib() {
        return $this->pib;
    }

    public function aumentarPopulacao($aumento) {
        $this->populacao += $aumento;
    }

    public function expandirArea($aumento) {
        $this->area += $aumento;
    }

    public function reduzirArea($reducao) {
        if ($this->area - $reducao >= 0) {
            $this->area -= $reducao;
        } else {
            echo "Não é possível reduzir a área para um valor negativo.\n";
        }
    }

    public function aumentarIdh($aumento) {
        $this->idh += $aumento;
    }

    public function aumentarProducao($aumento) {
        $this->producao += $aumento;
    }

    public function aumentarPib($aumento) {
        $this->pib += $aumento;
    }

    public function getDescricao() {
        return "Nome da cidade: " . $this->nome . "\n" .
               "População: " . $this->populacao . "\n" .
               "Área: " . $this->area . " km²\n" .
               "IDH: " . $this->idh . "\n" .
               "Produção: " . $this->producao . "\n" .
               "PIB: " . $this->pib . "\n";
    }
}
// Fim da Class //

// Programa Principal: //
$nome = readline("Digite o nome da cidade: ");
$populacao = (int) readline("Digite a população da cidade: ");
$area = (int) readline("Digite a área da cidade (em km²): ");
$idh = (float) readline("Digite o IDH da cidade: ");
$producao = (float) readline("Digite a produção da cidade: ");
$pib = (float) readline("Digite o PIB da cidade: ");

$cidade = new Cidade($nome, $populacao, $area, $idh, $producao, $pib);

while (true) {
    echo "Opções:\n";
    echo "1. Aumentar população\n";
    echo "2. Expandir área\n";
    echo "3. Reduzir área\n";
    echo "4. Aumentar IDH\n";
    echo "5. Aumentar produção\n";
    echo "6. Aumentar PIB\n";
    echo "7. Sair\n";

    $opcao = (int) readline("Digite a opção desejada: ");

    switch ($opcao) {
        case 1:
            $aumento = (int) readline("Digite o aumento da população: ");
            $cidade->aumentarPopulacao($aumento);
            break;
        case 2:
            $aumento = (int) readline("Digite o aumento da área (em km²): ");
            $cidade->expandirArea($aumento);
            break;
        case 3:
            $reducao = (int) readline("Digite a redução da área (em km²): ");
            $cidade->reduzirArea($reducao);
            break;
        case 4:
            $aumento = (float) readline("Digite o aumento do IDH: ");
            $cidade->aumentarPopulacao($aumento);
    }
}
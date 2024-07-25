<?php


class Monitor
{

    // Atributo //
    public $cor;
    public $resolucao;
    public $marca;

    // Método //
    function ligar()
    {
        echo "Computador Ligado!" . "\n";
    }

    function desligar()
    {
        echo "Computador Desligado!" . "\n";
    }

    function mostrarImagem()
    {
        echo "Computador Mostrando Imagem com a resolução " . $this->resolucao . "!" . "\n";
    }
}

// Programa Principal //

$monitor1 = new Monitor();
$monitor1->cor = "Preto";
$monitor1->resolucao = "1080x1929";
$monitor1->marca = "AOC";

$monitor1->ligar();
$monitor1->desligar();
$monitor1->mostrarImagem();

echo "Cor do Monitor 1: " . $monitor1->cor . "\n";

$monitor2 = new Monitor();
$monitor2->cor = "Azul";
$monitor2->resolucao = "1080x1920";
$monitor2->marca = "ACE";

$monitor2->ligar();
$monitor2->desligar();
$monitor2->mostrarImagem();

echo "Cor do Monitor 2: " . $monitor2->cor . "\n";

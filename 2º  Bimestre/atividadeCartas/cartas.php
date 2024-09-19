<?php

//  Início da Class  //
class Carta {
    // Atributos: //
    private $numero;
    private $nome;

    // GETs e SETS: //
    public function getNumero() {
        return $this->numero;
    }
    public function setNumero($numero): self {
        $this->numero = $numero;
        return $this;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome): self {
        $this->nome = $nome;
        return $this;
    }
}

//  Fim da Class  //

//  Programa Principal:  //
$baralho = [];
$nomesCartas = [
    "Pikachu",
    "Bulbasaur",
    "Charmander",
    "Squirtle",
    "Charizard",
    "Blastoise",
    "Venusaur",
    "Jigglypuff",
    "Clefairy",
    "Meowth",
    "Mr. Mime",
    "Eevee"
];
for ($i=0; $i < 12 ; $i++) { 
    $carta = new Carta();
    $carta->setNumero($i+1);
    $carta->setNome($nomesCartas[$i]);

    $baralho[] = $carta;
}

// A função shuffle() reorganiza os elementos do array de forma aleatória
shuffle($baralho);

// A função array_rand retorna uma chave aleatória do array
$cartaSorteada = $baralho[array_rand($baralho)];

$pontos = 10;

echo "Informe quantas tentativas você quer ter: ";
 // A função fgets(STDIN) lê a entrada do usuário e trim() remove espaços em branco do início e do fim da string
$maxTentativas = (int) trim(fgets(STDIN));

$tentativas = 0;
$cartasJaEscolhidas = [];

while (true) {
    echo "Baralho: " . "\n";
    foreach ($baralho as $carta) {
        echo $carta->getNumero() . " - " . $carta->getNome() . "\n";
    }

    echo "Tente adivinhar a carta sorteada (digite o número da carta): ";
    $resposta = trim(fgets(STDIN));

    if ($resposta == 'desistir') {
        echo "Você desistiu! A carta sorteada era " . $cartaSorteada->getNome() . ".\n";
        break;
    }

    // a função in_array é usada para verificar se a resposta do usuário já foi escolhida anteriormente
    if (in_array($resposta, $cartasJaEscolhidas)) {
        echo "Você já escolheu essa carta anteriormente! Tente novamente.\n";
        continue;
    }

    $cartasJaEscolhidas[] = $resposta;

    foreach ($baralho as $carta) {
        if ($carta->getNumero() == $resposta) {
            if ($carta == $cartaSorteada) {
                echo "Parabéns! Você adivinhou a carta sorteada em " . ($tentativas + 1) . " tentativas.\n";
                echo "Você fez " . $pontos . " pontos.\n";
                exit;
            } else {
                echo "Você errou! A carta número " . $carta->getNumero() . " não é a carta sorteada.\n";
                $pontos -= 2;
                $tentativas++;
            }
        }
    }
    if ($tentativas >= $maxTentativas) {
        echo "Você alcançou o limite de tentativas! A carta sorteada era " . $cartaSorteada->getNome() . ".\n";
        break;
    }
}

?>
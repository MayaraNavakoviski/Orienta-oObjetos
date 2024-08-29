<?php

//  Começo da Class:  // 
class Escola {

    // Atributo: //
    private string $nome;
    private string $endereco;
    private int $quantAlunos;

    // Construtor:  //
    public function __construct($n= "", $e= "", $qtA=0) {
        $this->nome = $n;
        $this->tipo = $e;
        $this->qtdSensores = $qtA;
    }

    // Métodos: //
    public function __toString() {
        return $this->nome . " - " . $this->endereco . " - " . $this->quantAlunos . "\n";
    }


    // GETs e SETs: //
    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }
    public function getEndereco(): string {
        return $this->endereco;
    }

    public function setEndereco(string $endereco): self {
        $this->endereco = $endereco;
        return $this;
    }

    public function getQuantAlunos(): int {
        return $this->quantAlunos;
    }

    public function setQuantAlunos(int $quantAlunos): self {
        $this->quantAlunos = $quantAlunos;
        return $this;
    }
    
}
//  Fim da Class  //

//  Começo da Programa Principal:  //


// 1. 
$escolas = [];
for ($i = 1 ; $i <= 4 ; $i++) { 

    $escola = new Escola();
    $escola1->setNome(readline("Me informe o nome da " . $i . "º escola: " . "\n"));
    $escola1->setEndereco(readline("Me informe o endereço da " . $i . "º escola: " . "\n"));
    $escola1->setQuantAlunos(readline("Me informe a quantidade de alunos da " . $i . "º escola: " . "\n"));
    
    $escolas[] = $escola;
}

// 2. 
foreach ($escolas as $e) {
    echo $e;
}

// 3.

$maisAlunos = 0;

foreach ($escolas as $e) {
    if ($e->getQuantAlunos() > $maisAlunos->getQuantAlunos) {
       $maisAlunos = $e;
    }
}

echo "A escola com mais alunos é: " . "\n";
echo $maisAlunos->getNome(), $maisAlunos->getEndereco(), $maisAlunos->quantAlunos();




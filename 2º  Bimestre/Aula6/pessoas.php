<?php

//  Começo da Class:  /
class Pessoa {

    // Atributos: //
    private string $nome;
    private string $sobrenome;
    private int $idade;


    // GETs e SETs: //
    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): self {
        $this->nome = $nome;
        return $this;
    }

    public function getSobrenome(): string {
        return $this->sobrenome;
    }

    public function setSobrenome(string $sobrenome): self{
        $this->sobrenome = $sobrenome;
        return $this;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function setIdade(int $idade): self {
        $this->idade = $idade;
        return $this;
    }

    public function __toString() {
        $dados = $this->getNome() . " " . $this->getSobrenome() . ", " . $this->getIdade() . " anos " . "\n";
        return $dados;
    }
}
//  Fim da Class  //


//  Programa Principal:  //
$escolha = 0;
$cadastro = array();

do {
    echo "\n" . "--------- MENU -----------" . "\n";
    echo " 1 -------- CADASTRAR ------ " . "\n";
    echo " 2 -------- LISTAR --------- " . "\n";
    echo " 0 -------- SAIR ----------- " . "\n";

    $escolha = readline("De qual serviço você precisa? " . "\n");

    switch ($escolha) {

        case 0: 
           echo "O SERVIÇO SERÁ ENCERRADO..." . "\n";
            break;

        case 1:

            $novoCadastro = new Pessoa();
            $novoCadastro->setNome(readline("Informe o nome para o cadastro ser feito: " . "\n"));
            $novoCadastro->setSobrenome(readline("Informe o sobrenome para o cadastro: " . "\n"));
            $novoCadastro->setIdade(readline("Informe a idade para o cadastro: " . "\n"));
            
            array_push($cadastro , $novoCadastro);

            echo "O cadastro foi feito com sucesso!!!!!" . "\n";

            break;

        case 2:
            
            foreach ($cadastro as $c) {
                echo $c;
            }

        break;
        
        default:
            echo "SERVIÇO É INVÁLIDO!!";
            break;
    }
    
} while ($escolha != 0); 
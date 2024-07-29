<?php

class Pessoa {

    // Atributos //

    public $nome; 
    public $endereco;
    public $cidade;
    public $uf;
    public $altura;


    // Métodos //

    public function falarOla(){
        echo "Olá Mundooo, sou " . $this->nome . "!\n";
    }

    public function falarEndereco(){
        echo "Moro em " . $this->endereco . ", " . $this->cidade . "-" . $this->uf . "!\n";
    }

    public function falarAltura (){
        echo "Tenho " . $this->altura .  " metros!" . "\n";
    }

}

// Programa Principal //

$Pessoa1 = new Pessoa();
$Pessoa1->nome = "Mayara";
$Pessoa1->endereco = "Rua Bélgica 551";
$Pessoa1->cidade = "Foz do Iguaçu"; 
$Pessoa1->uf = "PR";
$Pessoa1->altura = "1.72";


$Pessoa1->falarOla();
$Pessoa1->falarEndereco();
$Pessoa1->falarAltura();



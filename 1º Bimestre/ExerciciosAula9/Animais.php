<?php 

class Animal{

    // ATRIBUTO //
    public $nome;
    public $especie;
    public $patas;
    public $pele;
    public $tipoDeSom;
    public $movimento;

    // MÉTODOS //
    public function __construct($nome,$especie,$patas,$pele,$tipoDeSom,$movimento) {
        $this->especie = $especie;
        $this->nome = $nome;
        $this->patas = $patas;
        $this->pele = $pele;
        $this->tipoDeSom =$tipoDeSom;
        $this->movimento = $movimento;
    }
    public function emitirSom(){
        echo $this->nome . " faz " . $this->tipoDeSom . ".\n";
    }  
    public function especie(){
        echo $this->nome . " é da espécie " . $this->especie . ".\n";
    } 
    public function movimento(){
        echo  $this->nome . " se movimenta " . $this->movimento . ".\n";
    }
    public function patas(){
        echo $this->nome . " tem " . $this->patas ." patas." . "\n";
    }
     public function pele(){
        echo $this->nome . " tem pele " . $this->pele . ".\n";
    }
} 

// PROGRAMA PRINCIPAL //
for ($i = 1; $i < 10; $i++) { 
    echo "ANIMAL " . $i . "\n";

    $nome = readline("Qual o nome do animal?" . "\n");
    $especie = readline("Qual a especie do animal?" . "\n");
    $patas = readline("Quantas patas tem o animal?" . "\n");
    $pele = readline("Qual o tipo de pele do animal?" . "\n");
    $tipoDeSom = readline("Qual o tipo de som que é emitido pelo animal?" . "\n"); 
    $movimento = readline("Qual o movimento feito pelo animal?" . "\n");

    $obEspecie = new Animal($nome,$especie,$patas,$pele,$tipoDeSom,$movimento);
    $obEspecie->emitirSom(); 
    $obEspecie->especie(); 
    $obEspecie->movimento();
    $obEspecie->patas();
    $obEspecie->pele();
 }
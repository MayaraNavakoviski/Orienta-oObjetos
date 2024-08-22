<?php

//  Começo da Class:  //
class Produto{

    // Atibutos: //
    private $descricao;
    private $unMedida;
    private $quant;
    private $valorUnit;

     // Métodos //
     public function getValorTotal(){
        return $this->quant * $this->valorUnit;
    }
    
    // GETs e SETs: //
    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao): self {
        $this->descricao = $descricao;
        return $this;
    }

    public function getUnMedida(){
        return $this->unMedida;
    }
    public function setUnMedida($unMedida): self {
        $this->unMedida = $unMedida;
        return $this;
    }

    public function getQuant(){
        return $this->quant;
    }

    public function setQuant($quant): self{
        $this->quant = $quant;
        return $this;
    }

    public function getValorUnit(){
        return $this->valorUnit;
    }

    public function setValorUnit($valorUnit): self {
        $this->valorUnit = $valorUnit;
        return $this;
    }

    public function getMensagem(){
        return  $this->getDescricao() . "-" . $this->getUnMedida() . " | " . $this->getQuant() . " X " . $this->getValorUnit() . " = " . $this->getValorTotal() . "\n";
    }
}
//  Fim da Class  //

//  Progrma Principal:  //

$produto1 = new Produto();

$produto1->setDescricao(readline("Me informe o nome do 1º Produto: " . "\n"));
$produto1->setUnMedida(readline("Me informe a unidade de medida do 1º Produto : " . "\n"));
$produto1->setQuant(readline("Me informe a quantidade do 1º Produto : " . "\n"));
$produto1->setValorUnit(readline("Me informe o valor unitario do 1º Produto : " . "\n"));

echo $produto1->getMensagem();

$produto2 = new Produto();

$produto2->setDescricao(readline("Me informe o nome do 2º Produto: " . "\n"));
$produto2->setUnMedida(readline("Me informe a unidade de medida do 2º Produto : " . "\n"));
$produto2->setQuant(readline("Me informe a quantidade do 2º Produto : " . "\n"));
$produto2->setValorUnit(readline("Me informe o valor unitario do 2º Produto : " . "\n"));

echo $produto2->getMensagem();

$produto3 = new Produto();

$produto3->setDescricao(readline("Me informe o nome do 3º Produto: " . "\n"));
$produto3->setUnMedida(readline("Me informe a unidade de medida do 3º Produto : " . "\n"));
$produto3->setQuant(readline("Me informe a quantidade do 3º Produto : " . "\n"));
$produto3->setValorUnit(readline("Me informe o valor unitario do 3º Produto : " . "\n"));

echo $produto3->getMensagem();


if($produto1->getValorTotal()> $produto2->getValorTotal() && $produto1->getValorTotal()>$produto3->getValorTotal()){
    echo "Venda com maior valor total do produto 1: " . $produto1->getDescricao() . " ". $produto1->getUnMedida();
} else{
    if($produto2->getValorTotal()>$produto3->getValorTotal()){
        echo "Venda com maior valor total do produto 2: " . $produto2->getDescricao() . " ". $produto2->getUnMedida();
    }
    else{
        echo "Venda com maior valor total do produto 3: " . $produto3->getDescricao() . " ". $produto3->getUnMedida();
    }
}

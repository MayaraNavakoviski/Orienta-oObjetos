<?php

    //  Começo da Class  //

    class Liquidificador{

        // Atributos: //
        private $cor;
        private $marca;
        private $voltagem;
        private $capacidade;

        // Métodos: //
        public function ligar(){
            echo "LIGADO" . "\n";
            $this->girarMotor();
        }
        public function desligar(){
            echo "DESLIGADO" . "\n";
            $this->pararMotor();
        }
        public function inverter(){
            echo "Motor Invertido" . "\n";
        }
        private function girarMotor(){
            echo "Motor Girando" . "\n";
        }
        private function pararMotor(){
            echo "Motor Parado" . "\n";
        }

        // Construct: //
        public function __construct() {
            $this->cor = $cor;
        }

        // GETs e SETs: //
        
        public function getCor() {
                return $this->cor;
        }
        public function setCor($cor): self {
                $this->cor = $cor;
                return $this;
        }

        public function getMarca() {
                return $this->marca;
        }
        public function setMarca($marca): self {
                $this->marca = $marca;
                return $this;
        }

        public function getVoltagem() {
                return $this->voltagem;
        }
        public function setVoltagem($voltagem): self{
                $this->voltagem = $voltagem;
                return $this;
        }

        public function getCapacidade(){
                return $this->capacidade;
        }
        public function setCapacidade($capacidade): self {
                $this->capacidade = $capacidade;
                return $this;
        }

    }
    //  Fim da Class  //

    //  Programa Principal  //

    $liq = new Liquidificador("Vermelho");
    $liq->ligar();
    $liq->desligar();
    echo "A cor do liquidificador é: " . $liq->getCor . "\n";
    $liq->setMarca("Britania");
    print_r;
   
    
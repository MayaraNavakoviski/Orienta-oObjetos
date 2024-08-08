<?php

    //  Começo da Class  //
    class Pessoa{

        // Atributos: //
        private $nome;
        private $endereco;
        private $cidade;
        private $uf;
        private $altura;

        // GETs e SETS: //
        public function getNome() {
                return $this->nome;
        }
        public function setNome($nome): self{
                $this->nome = $nome;
                return $this;
        }

        public function getEndereco()   {
                return $this->endereco;
        }
        public function setEndereco($endereco): self {
                $this->endereco = $endereco;
                return $this;
        }

        public function getCidade()  {
                return $this->cidade;
        }
        public function setCidade($cidade): self {
                $this->cidade = $cidade;
                return $this;
        }

        public function getUf() {
                return $this->uf;
        }
        public function setUf($uf): self{
                $this->uf = $uf;
                return $this;
        }

        public function getAltura() {
                return $this->altura;
        }
        public function setAltura($altura): self{
                $this->altura = $altura;
                return $this;
        }

        public function getApresentacao(){
            return "Olá Mundo, meu nome é " . $this->getNome() . " resido no endereço " . $this->getEndereco() . $this->getCidade() . $this->getUf() . " e possuo " . $this->getAltura() . " metros de altura." . "\n";
    }
}
    //  Fim da Class  //

    // Programa Principal: //
    $pessoa = new Pessoa();
    for ($i=0; $i < 2 ; $i++) { 
        $pessoa->setnome(readline("Me informe o nome da pessoa " ));
        $pessoa->setendereco(readline("Me informe o endereço da pessoa "));;
        $pessoa->setcidade(readline("Me informe a cidade da pessoa " . $i));;
        $pessoa->setuf(readline("Me informe o UF da pessoa " . $i));;
        $pessoa->setaltura(readline("Me informe a altura da pessoa " . $i));;

        echo $pessoa->getApresentacao();
    }

    //$pessoa->setnome("Mayara Navakoviski");
    //$pessoa->setendereco("Rua Bélgiva 551");
    //$pessoa->setcidade("Foz do Iguaçu");
    //$pessoa->setuf("PR");
    //$pessoa->setaltura("1.72");
    //echo $pessoa->getApresentacao();


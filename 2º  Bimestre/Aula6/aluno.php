<?php

    //  Começo da Class  //
    class Aluno{

        // Atributos //
        private $nome;
        private $nota1;
        private $nota2;

        // Métodos //
        public function getMedia(){
            $notaTotal = ($this->nota1+$this->nota2)/2;
        }

        // SETs e GETs //
        public function getNome() {
                return $this->nome;
        }
        public function setNome($nome): self{
                $this->nome = $nome;
                return $this;
        }

        public function getNota1() {
                return $this->nota1;
        }
        public function setNota1($nota1): self{
                $this->nota1 = $nota1;
                return $this;
        }

        public function getNota2(){
                return $this->nota2;
        }
        public function setNota2($nota2): self{
                $this->nota2 = $nota2;
                return $this;
        }

        public function getMediat(){
            echo "A média do aluno " . $this->getNome() . " será: " . $this->getMedia();

        }
    }
    //  Fim da Class //

    // Programa Principal //

    for ($i=1; $i <= 3; $i++) { 
        $aluno = new Aluno();
        $aluno->setNome(readline("Me informe o nome do " . $i . " aluno: " . "\n"));
        $aluno->setNota1(readline("Me informe a primeira nota do " . $i . " aluno: " . "\n"));
        $aluno->setNota2(readline("Me informe a segunda nota do " . $i . " aluno:" . "\n"));
         echo $aluno->getMediaT();
    }
    
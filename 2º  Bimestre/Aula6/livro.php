<?php

    //  Começo da Class  //
    class Livro{

        // Atributo //
        private $titulo;
        private $autor;
        private $genero;
        private $numPag;

        // GETs e SETs //
        public function getTitulo() {
                return $this->titulo;
        }
        public function setTitulo($titulo): self {
                $this->titulo = $titulo;
                return $this;
        }

        public function getAutor(){
                return $this->autor;
        }
        public function setAutor($autor): self  {
                $this->autor = $autor;
                return $this;
        }

        public function getGenero() {
                return $this->genero;
        }
        public function setGenero($genero): self   {
                $this->genero = $genero;
                return $this;
        }

        public function getNumPag(){
                return $this->numPag;
        }

        public function setNumPag($numPag): self {
                $this->numPag = $numPag;
                return $this;
        }
    }

   
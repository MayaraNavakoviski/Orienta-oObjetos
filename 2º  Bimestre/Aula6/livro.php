<?php 

//  Começo da Class  //
class Livro {
    // Atributos //
    private string $titulo;
    private string $autor;
    private string $genero;
    private int $num_paginas;
    
    // Métodos //
    public function __construct($titulo,$autor,$genero,$num_paginas) {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setGenero($genero);
        $this->setNumPaginas($num_paginas);
    }
    public function getDados(){
        return "\nTITULO-> ".$this->getTitulo()."\nAUTOR-> ".$this->getAutor()."\nGENERO-> ".$this->getGenero()."\nNUMERO DE PÁGINAS-> ".$this->getNumPaginas();
    }
    
     // SETs e GETs //
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo): self   {
        $this->titulo = $titulo;
        return $this;
    }
    
    public function getAutor()  {
        return $this->autor;
    }
    
    public function setAutor($autor): self{
        $this->autor = $autor;
        return $this;
    }

    public function getGenero()  {
        return $this->genero;
    }
    
    public function setGenero($genero): self{
        $this->genero = $genero;
        return $this;
    }

    public function getNumPaginas()
    {
        return $this->num_paginas;
    }

    public function setNumPaginas($num_paginas): self   {
        $this->num_paginas = $num_paginas
        return $this;
    }
}

// Progrma Principal:  

$livro1 = new Livro("Orgulho e Preconceito", "Jane Austen", "Romance", 424);
$livro2 = new Livro("Emma", "Jane Austen", "Romance", 536);
$livro3 = new Livro("Persuasão", "Jane Austen", "Romance", 288);
$arrayLivros = [$livro1, $livro2, $livro3];
$livroMaior = $arrayLivros[0];

/*
for ($i=0; $i < count($arrayLivros); $i++) { 
  if ($arrayLivros[$i]->getNumPaginas() > $livroMaior->getNumPaginas() ) {
        $livroMaior = $livro[$i];
  }
}
*/

foreach (array_slice($arrayLivros,1) as $livro) {
    if ($livro->getNumPaginas() > $livroMaior->getNumPaginas()) {
        $livroMaior = $livro;
    }
}
echo $livroMaior->getDados();

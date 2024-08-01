<?php 

class Pokemon{
    
    //  ATRIBUTO //
    public $nome;
    public $tipo;
    public $ataque;
    public $defesa; 
    public $velocidade;
    public $nivel;
    public $experiencia; 
    public $pontosDeVida;

    // CONSTRUCT //
    public function __construct($nome,$tipo,$ataque,$velocidade,$nivel,$experiencia,$pontosDeVida,$defesa) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->experiencia = $experiencia;
        $this->pontosDeVida = $pontosDeVida;
        $this->nivel = $nivel;
        $this->ataque = $ataque;
        $this->velocidade = $velocidade;
        $this->defesa = $defesa;
    }

    // MÉTODOS //
    public function batalhar(){
        echo "O seu pokémon foi a batalha." . "\n";
    } 
    public function aumentarExperiencia(){
        $this->experiencia = $this->nivel + 1;
        if($this->experiencia)
        echo "A experiencia de seu pokémon foi aumentada!!!!!!!!!" . "\n";
    } 

    public function aumentarNivel(){
        $this->nivel = $this->nivel + 1;
        echo "Nivel do seu pokémon foi aumentado!!!!!!!!!" . "\n";
    }  

    public function aumentarPontosDeVida(){
        $this->pontosDeVida = $this->pontosDeVida + 1;
    }
    public function diminuirPontosDeVida($quantidade) {
        $this->pontosDeVida = $this->pontosDeVida - $quantidade;
        if ($this->pontosDeVida < 0) {
            $this->pontosDeVida = 0;
        }
    }
}

// PROGRAMA PRINCIPAL //

$quant = readline("Quantos pokémon deseja fazer? " . "\n");

for ($i=1; $i = $quant ; $i++) { 
    $nome = readline("Qual o nome do $i º pokémon?" . "\n");
    $tipo = readline("Qual o tipo do $i º pokémon?" .  "\n");
    $ataque = readline("Qual o ataque do $ iº pokémon?" . "\n");
    $defesa = readline("Qual a defesa do $i º pokémon?" . "\n");
    $velocidade = readline("Qual a velocidade do $i º pokémon?" . "\n");
    $nivel = readline("Informe o nível do $i º pokémon: " . "\n");
    $experiencia = readline("Qual a experiencia do $i º pokémon?" . "\n");
    $pontosDeVida = readline("Qual a quantidade de pontos de vida do $i º pokémon" . "\n");

    $pokémons = new Pokemon ($nome,$tipo, $ataque, $defesa, $velocidade, $nivel,  $experiencia, $pontosDeVida);

    $pokémons-> batalhar($nome);
    echo "Agora vamos descobrir se voce se saiu bem na batalha ";
    $pokémons-> aumentarNivel($nivel);
    $pokémons-> aumentarExperiencia($experiencia, $nivel); 
       
    }
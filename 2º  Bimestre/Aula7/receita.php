<?php


//  Começo da Class RECEITA //
class Receita{

    // Atributos:
    private $descricaoR;
    private $valorR;

    // GETs e SETs:
    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao): self {
        $this->descricao = $descricao;
        return $this;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor): self {
        $this->valor = $valor;
        return $this;
    }

    public function __toString() {
        $dados = $this->getDescricao() . " - " . $this->getValor();
        return $dados;
    }

}

//  Começo da Class DESPESA  //
class Despesa{

    // Atributos:
    private $descricaO;
    private $valor;

    // GETs e SETs:
    public function getDescricao() {
        return $this->descricao;
    }
    public function setDescricao($descricao): self {
        $this->descricao = $descricao;
        return $this;
    }
    public function getValor() {
        return $this->valor;
    }
    public function setValor($valor): self {
        $this->valor = $valor;
        return $this;
    }
    public function __toString() {
        $dados = $this->getDescricao() . " - " . $this->getValor();
        return $dados;
    }

}

//  Programa Principal:  //

$escolha = 0;
$despesas = array();
$receitas = array();

do {
    echo "\n" . "--------- MENU -----------------------" . "\n";
    echo " 1. -------- ADCIONAR RECEITA ------ " . "\n";
    echo " 2. -------- ADCIONAR DESPESAS ----- " . "\n";
    echo " 3. -------- LISTAR RECEITAS ------- " . "\n";
    echo " 4. -------- LISTAR DESPESAS ------- " . "\n";
    echo " 5. -------- SUMARIZAR ------------- " . "\n";
    echo " 0. -------- SAIR ------------------" . "\n";

    $escolha = readline("De qual serviço você precisa? " . "\n");

    switch ($escolha) {

        case 0: 
           echo "O SERVIÇO SERÁ ENCERRADO..." . "\n";
            break;
        
        case 1:
            $adcionarReceita = new Receita();
            $adcionarReceita->setDescricao(readline("Informe a descrição da receita que deseja adcionar: " . "\n"));
            $adcionarReceita->setValor(readline("Informe o valor da receita que deseja adcionar: " . "\n"));

            array_push($receitas , $adcionarReceita);

            echo " A receita foi adcionada com sucesso!!!" . "\n";
            break;

        case 2:
            $adcionarDespesas = new Despesa();
            $adcionarDespesas->setDescricao(readline("Informe a descrição da receita que deseja adcionar: " . "\n"));
            $adcionarDespesas->setValor(readline("Informe o valor da receita que deseja adcionar: " . "\n"));
    
            array_push($despesas , $adcionarDespesas);
            echo " A despesa foi adcionada com sucesso!!!" . "\n";
            break;

        case 3:
            foreach ($receitas as $r) {
                echo $r;
        }
        break;

        case 4:
            foreach ($despesas as $d) {
                echo $d;
        }
        break;

        case 5:
            $totalR = 0;
            $totalD = 0;
            $total = 0;

            foreach ($receitas as $r) {
                $totalR = $totalR + $r->getValor();
            }
            foreach ($despesas as $d) {
                $totalD = $totalD + $d->getValor();
            }

            $total = $totalR - $totalD;

            echo "Saldo: " . $total . "\n";
            echo "Total de Receitas: " .  $totalR . "\n";
            echo "Total de Despesas: " . $totalD  . "\n";
           
        break;
        
        default:
            echo "SERVIÇO É INVÁLIDO!!";
            break;
    }
    
} while ($escolha != 0); 


        




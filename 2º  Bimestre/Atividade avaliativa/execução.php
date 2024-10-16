<?php
 
require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");

$pedidoArray = array();

$pratoArray = array (
    new Prato(1, "Camarão a Milanesa" , 110.00),
    new Prato(2, "Pizza Margherita" , 80.00),
    new Prato(3, "Macarrão a Carbonara" , 60.00),
    new Prato(4, "Bife a Parmegiana" , 75.00),
    new Prato(5, "Risoto ao Funghi" , 70.00),
);

function retornaPrato ($pratoArray, $numero) {
    foreach($pratoArray as $pra) {
        if($numero == $pra->getNumero()) {
            return $pra;
        }
    }
    return null;
}

$escolha = 0;

do {
    echo "** -------- MENU ------------** . "\n";
    echo " 1 -------- CADASTRAR ---------* . "\n";
    echo " 2 -------- CANCELAR ----------* . "\n";
    echo " 3 -------- LISTAR ------------* . "\n";
    echo " 4 -------- TOTAL -------------* . "\n";
    echo " 0 -------- SAIR --------------* . "\n";

    $escolha = readline("De qual serviço você precisa? ");

switch ($escolha) {

    case 1:
        echo "\n" . "--- CADASTRO --- " . "n";

        $pedido = new Pedido();
        $pedido->setNomeCliente(readline("Informe o nome do cliente: "));
        $pedido->setNomeGarcom(readline("Informe o nome do garçom: "));

        $prato = null;
        while ($prato == null) {
            echo "\n" . "LISTA DE PRATO". "\n";
            foreach ($pratoArray as $pra) {
                echo $pra;
            }
        
            $numero = readline("Informe o número do prato: ");
            $prato = retornaPrato($pratoArray, $numero);
        }

        $pedido->setPrato($prato);
        array_push($pedidoArray, $pedido);

        break;

    case 2:
        print "LISTA PEDIDOS\n\n";
        foreach ($pedidoArray as $i => $ped) {
            echo ($i + 1) . "º Pedido" . "n" . $ped;
        }

        $indiceRemover = readline("Quem você gostaria de remover? (INFORME O NÚMERO): ");
        $indiceRemover--;

        if ($indiceRemover >= 0 && $indiceRemover < count($pedidoArray)) {
            array_splice($pedidoArray, $indiceRemover, 1);
        }
        else {
            echo "REMOÇÃO INVÁLIDA! \n";
        }

        break;
    
    case 3:
        foreach ($pedidoArray as $i => $ped) {
            echo "\n" "O cliente " . $ped->getNomeCliente() . ", foi atendido pelo garçom " . $ped->getNomeGarcom() . ", pediu um prato de " . $ped->getPrato()->getNome() . " no valor de R$ " . $ped->getPrato()->getValor() . "\n";
        }
        break;

    case 4: 
        $total = 0;
        foreach ($pedidoArray as $ped) {
            $total = $total + $ped->getPrato()->getValor();
        }
        echo "\n" . "\n" . "O valor total dos pedidos foram de: R$ " . $total . "\n";
        break;

    
    case 0: 
        echo "\n" . "ENCERRANDO APLICAÇÃO...";
        break;

    default:
        echo "\n" . "OPÇÃO INVÁLIDA";
        break;
}

} while ($escolha != 0);

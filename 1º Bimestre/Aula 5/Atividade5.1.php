<?php


$pessoas = [];


   for ($i = 1; $i < 5; $i++) {
     
       echo "Dados da " . $i . "º Pessoa: " . "\n"; 

       $nome = readline("Informe se Nome: " . "\n");
       $idade = readline("Informe sua Idade: " . "\n");
       $cidade = readline("Informe sua Cidade Natal: " . "\n");
       $profissao = readline("Informe sua Profissão: " . "\n");

       $pessoas[] = [
          "nome" => $nome,
          "idade" => $idade,
          "cidade" => $cidade,
          "profissao" => $profissao
    ];
}




     foreach ($pessoas as $pessoa) {
          if ($pessoa["idade"] > $maior_idade) {
             $maior_idade = $pessoa["idade"];
             $pessoa_mais_velha = $pessoa;
    }
}


       echo "A pessoa mais velha é:\n";
       echo "Nome: " . $pessoa_mais_velha["nome"] . "\n";
       echo "Idade: " . $pessoa_mais_velha["idade"] . "\n";
       echo "Cidade Natal: " . $pessoa_mais_velha["cidade"] . "\n";
       echo "Profissão: " . $pessoa_mais_velha["profissao"] . "\n";

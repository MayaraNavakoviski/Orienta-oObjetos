<?php



   $tab = array ("1"  =>  array( "nome"  =>  "Manuel de Medeiros",
                                 "endereco"  =>  "Rua das Acácias",
                                 "cidade"   =>  "Foz do Iguaçu",
                                 "UF"   =>  "PR" ),
                 "2"  =>  array( "nome"  =>  "Juliana de Amaral",
                                 "endereco"  =>  "Rua dos Pinheiros",
                                 "cidade"  =>   "Florianópolis",
                                 "UF"  =>  "SC"),
                "3"  =>  array ("nome"  =>  "Rodrigo Beidek",
                                "endereco"  =>  "Rua Dom Pedro I",
                                "cidade"   =>  "Petrópolis",
                                "UF"  =>  "RJ"),
                "4"  =>  array( "nome"  =>  "Fabíola da Silava",
                                "endereco"  =>  "Rua Chile",
                                "cidade"  =>  "Guarulhos",
                                "UF"  => "SP"));

   foreach($tab as $dados){
          echo $dados['nome'] . " | ";
          echo $dados['endereco'] . " | ";
          echo $dados['cidade'] . " | ";
          echo $dados['UF'] . " | " . "\n"; 

   }

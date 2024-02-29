<?php

$person1=array("nome" => "Manuel de Medeiros", "endereço" => "Rua das Acácias", "cidade" => "Foz do Iguaçu", "uf" => "PR");
$person2=array("nome" => "Juliana de Amaral", "endereço" => "Rua dos Pinheiros", "cidade" => "Florianópolis", "uf" => "SC");
$person3=array("nome" => "Rodrigo Baidek", "endereço" => "Rua Dom Pedro I", "cidade" => "Petrópolis", "uf" => "RJ");
$person4=array("nome" => "Fabiola da Silva", "endereço" => "Rua Chile", "cidade" => "Guarulhos", "uf" => "SP");

$people=array($person1, $person2, $person3, $person4);

foreach($people as $p){
    foreach($p as $dado){
        echo $dado . " | ";
    }
    echo "\n";
}

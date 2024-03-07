<?php

$pessoas = array();
for($i=0;$i<=4;$i++){
    echo "\nPessoa " . $i+1 . ":\n";
    $pessoa["nome"]=readline("\nEscreva o nome da pessoa: ");
    $pessoa["idade"]=readline("\nEscreva a idade da pessoa: ");
    $pessoa["cidadeNat"]=readline("\nEscreva a cidade natal da pessoa: ");
    $pessoa["profissao"]=readline("\nEscreva a profissão da pessoa: ");
    array_push($pessoas, $pessoa);
}

$pessoaVelha=$pessoas[0];

foreach($pessoas as $p){
    if($p["idade"]>$pessoaVelha["idade"]){
        $pessoaVelha=$p;
    }
}

/*  $n=$pessoas[0]["idade"];
    foreach($pessoas["idade"] as $x){
        if($x>$n){
            $n=$x;
        }
    }
*/

echo "\nDados da pessoa mais velha: \n";
echo "Nome: " . $pessoaVelha["nome"] . ".\nIdade: " . $pessoaVelha["idade"] . ".\nCidade natal: " . $pessoaVelha["cidadeNat"] . ".\nProfissão: " . $pessoaVelha["profissao"] . ".";

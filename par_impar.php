<?php

function verificar($n){
    if($n==0){
        print("\nEste número é nulo, fim do programa.\n\n");
    } else if($n%2==0){
        print("\nEste número é par!\n\n");
    } else{
        print("\nEste número é ímpar!\n\n");
    }
}

$n=1;

while($n!=0){
    $n=readline("Digite um número: ");
    verificar($n);
}

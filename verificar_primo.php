<?php

function verificarPrimo($num){
    return($num%1==0 && $num%$num==0 && $num%2!=0 && $num%3!=0);
}

$num=2;

while($num>=2){
    $num=readline("Digite um número: ");
    $primo=verificarPrimo($num);
    if($primo){
        print("\nEste número é primo!\n\n");
    }else{
        print("\nEste número não é primo!\n\n"); 
    }
}

<?php

$num=readline("Digite um número: ");

while($num>=2){
    verificarPrimo($num);
    $num=readline("Digite outro número: ");
}

function verificarPrimo($num){
    $primo=0;
    for($i=1;$i<=$num;$i++){
        if($num%$i==0){
            $primo++;
        }
    }
    if($primo==2){
        print("\nEste número é primo!\n\n");
    } else{
        print("\nEste número NÃO é primo!\n\n");
    }
}

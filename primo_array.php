<?php

$primo=array();

function verificarPrimo($num){
        for($i=2;$i<=sqrt($num);$i++){ 
            if($num%$i==0)
                return false; 
        } 
        return true; 
}

$num=1;

while($num>0){
    $num=readline("Digite um número: ");
    if($num!=0){
        verificarPrimo($num);
        if(verificarPrimo($num)==true){
            array_push($primo, $num);
        }
    }
}

print "\nCódigo ENCERRADO.\n";
print "Números primos:\n";
foreach($primo as $a){
    print($a . " | ");
}
print "\n";

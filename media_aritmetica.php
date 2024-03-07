<?php

$soma=array();
$n=0;
for($i=0;$i<10;$i++){
    $n=readline("Digite um número: ");
    array_push($soma, $n);
}

$n=0;
$x=0;
foreach($soma as $x){
    $n+=$x;
}

print "\nMédia aritmética: " . $n/10 . ".\n";

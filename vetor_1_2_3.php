<?php

$vetor0=array();
$vetor1=array();
$vetor2=array();
$vetor3=array();

function operacao1($a){
    $x=$a*1.8+32;
    return $x;
}

function operacao2($a){
    $fat=1;
    for($i=$a;$i>0;$i--){
        $fat*=$i;
    }
    return $fat;
}

function operacao3($a){
    $y=($a*$a+2*$a+4)/2*$a;
    return $y;
}

for($i=1;$i<=5;$i++){
    $n=readline("Digite o " . $i . "° número: ");
    array_push($vetor0, $n);
}

foreach($vetor0 as $a){
    array_push($vetor1, operacao1($a));
    array_push($vetor2, operacao2($a));
    array_push($vetor3, operacao3($a));
}

print "\nVetor 1:\n";
foreach($vetor1 as $a){
    print $a . ", ";
}
print "\n";

print "\nVetor 2:\n";
foreach($vetor2 as $a){
    print $a . ", ";
}
print "\n";

print "\nVetor 3:\n";
foreach($vetor3 as $a){
    print $a . ", ";
}
print "\n";

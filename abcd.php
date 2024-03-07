<?php

$a=array();
$b=array();
$c=array();
$d=array();

/*function verificar($a, $b, $c){
    for($i=0;$i<5;$i++){
        foreach($b as $x){
            if($a[$i]==$b){
                array_push($c, $x);
            }
        }
    }
}*/

for($i=0;$i<5;$i++){
    $n=readline("Digite o " . $i+1 . "° número de A: ");
    array_push($a, $n);
}

print "\n";

for($i=0;$i<5;$i++){
    $n=readline("Digite o " . $i+1 . "° número de B: ");
    array_push($b, $n);
}

foreach($a as $x){
    array_push($d, $x);
}
foreach($b as $x){
    array_push($d, $x);
}

print "\nD = ";

foreach($d as $x){
    print $x . " | ";
}

foreach($a as $x){
    foreach($b as $y){
        if($a == $b){
            array_push($c, $x);
            break;
        }
    }
}

print "\nC = ";

foreach($c as $x){
    print $x . " | ";
}

print "\n";

// INCOMPLETO!!!!! NÚMEROS SE REPETEM

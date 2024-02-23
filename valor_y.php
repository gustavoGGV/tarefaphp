<?php

function valorY($x){
    $y=5*$x+2*$x+3;
    print ("\nValor de y: " . $y . ".\n\n");
}

for($i=1;$i<=5;$i++){
    $x=readline($i . "° - Digite o valor de x: ");
    valorY($x);
}

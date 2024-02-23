<?php

function areaCirculo($raio){
    $area=3.14*$raio*$raio;
    print("\nÁrea: " . $area . ".\n");
}

function circunferenciaCirculo($raio){
    $circunferencia=2*3.14*$raio;
    print("\nCircunferência: " . $circunferencia . ".\n\n");
}

for($i=1;$i<=3;$i++){
    $raio=readline("Digite o " . $i . "° raio (em centímetros): ");
    areaCirculo($raio);
    circunferenciaCirculo($raio);
}

<?php

//declaracao das variaveis
$processador = 0;
$placaVideo = 0;
$placaMae = 0;
$memoria = 0;

$pc = array();
$pcs = array();

//funcoes
function pipe($dado1, $dado2, $dado3, $dado4)
{
    print $dado1 . " | " . $dado2 . " | " . $dado3 . " | " . $dado4 . "\n";
}

for ($i=0; $i < 3; $i++) 
{ 
    $processador = readline("Informe o modelo de processador de seu computador: ");
    $placaVideo = readline("Informe o modelo de placa de vídeo: ");
    $placaMae = readline("Informe o modelo de placa mãe: ");
    $memoria = readline("Informe o modelo da memória RAM: ");

    $pc = array("Processador" => $processador,"PlacaVideo" => $placaVideo, "PlacaMae" => $placaMae, "Memoria" => $memoria);
    array_push($pcs, $pc);
}

foreach($pcs as $pc)
{
    system("clear");
    pipe($pc["Processador"], $pc["PlacaVideo"], $pc["PlacaMae"], $pc["Memoria"]);
}

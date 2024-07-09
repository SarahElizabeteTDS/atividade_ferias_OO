<?php

//declaracao das variaveis
$processador = 0;
$placaVideo = 0;
$placaMae = 0;
$memoria = 0;

$pc = array();
$pcs = array();

//funcao que imprime os dados
function pipe($dado1, $dado2, $dado3, $dado4)
{
    print $dado1 . " | " . $dado2 . " | " . $dado3 . " | " . $dado4 . "\n";
}

//laco para solicitar as informacoes
for ($i=0; $i < 3; $i++) 
{ 
    $processador = readline("Informe o modelo de processador do computador " . $i+1 . ": ");
    $placaVideo = readline("Informe o modelo de placa de vídeo do computador " . $i+1 . ": ");
    $placaMae = readline("Informe o modelo de placa mãe do computador " . $i+1 . ": ");
    $memoria = readline("Informe o modelo da memória RAM do computador " . $i+1 . ": ");

    $pc = array("Processador" => $processador,"PlacaVideo" => $placaVideo, "PlacaMae" => $placaMae, "Memoria" => $memoria);
    array_push($pcs, $pc);
}

//percorre a matriz
foreach($pcs as $pc)
{
    pipe($pc["Processador"], $pc["PlacaVideo"], $pc["PlacaMae"], $pc["Memoria"]);
}

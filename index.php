<?php
define("TARIFA_POR_KM", 2000); 

function calcularCorrida($distancia, $fimDeSemana) {
    $valor = $distancia * TARIFA_POR_KM;

    if ($fimDeSemana) {
        $valor += $valor * 0.05;
    }

    return $valor;
}

function exibirCorrida($motorista, $passageiro, $origem, $destino, $distancia, $fimDeSemana, $valorTotal) {
    
    echo "Motorista: $motorista <br>";
    echo "Passageiro: $passageiro <br>";
    echo "Trajeto: $origem → $destino <br>";
    echo "Distância: $distancia km <br>";
    echo "Fim de semana: " . ($fimDeSemana ? "Sim" : "Não") . "<br>";
    echo "------------------------------------------ <br>";
    echo "Valor total da corrida: " . number_format($valorTotal, 2, ',', '.') . " Kz";
}

$motorista = "EDUARDO/KINANGA";
$passageiro = "ARMANDO/....";
$origem = "UIGE";
$destino = "CAVALO NEGRO";
$distancia = 14;
$fimDeSemana = true;

$valorTotal = calcularCorrida($distancia, $fimDeSemana);

exibirCorrida($motorista, $passageiro, $origem, $destino, $distancia, $fimDeSemana, $valorTotal);

?>
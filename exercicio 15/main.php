<?php
$tempo = readline("Digite o tempo gasto na viagem: ");
$velocidade = readline("Digite a velocidade média: ");

$distancia = $tempo * $velocidade;
$litrosUsados = $distancia / 12;

echo "Velocidade média: $velocidade Km/h\n";
echo "Tempo gasto: $tempo horas\n";
echo "Distância percorrida: $distancia Km\n";
echo "Litros de combustível utilizados: " . number_format($litrosUsados, 2, ',', '.') . " L\n";
?>
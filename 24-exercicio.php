<?php
/*
 * Escreva um algoritmo que receba de entrada a distância total (em km) percorrida
 * por um automóvel e a quantidade de combustível (em litros) consumida para percorrê-la
 * calcule e imprima o consumo médio de combustível. Fórmula: consumo médio = km / litros
 */

$distancia = 12;
$combustivel = 5;

$consumoMedio = $distancia / $combustivel;

echo "O consumo médio pela distância: {$distancia} km em combustível será: {$consumoMedio}";
<?php
/*
 * Escreva um algoritmo que leia três números nas variáveis val1, val2 e val3, calcule a média
 * na variável valM e exiba para o usuário o resultado.
 */

$val1 = 5.5;
$val2 = 7.2;
$val3 = 8.0;

$ValM = number_format(($val1 + $val2 + $val3) / 3, 1);
echo "Sua média é: {$ValM}";
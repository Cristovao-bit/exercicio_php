<?php
/*
 * Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% 
 * e 50% deste valor.
 */

$valor = 30;

$porcent5 = ($valor * 5) / 100;
echo "{$valor} em 5% do seu valor: {$porcent5}";

echo "<br>";

$porcent50 = ($valor * 50) / 100;
echo "{$valor} em 50% do seu valor: {$porcent50}";
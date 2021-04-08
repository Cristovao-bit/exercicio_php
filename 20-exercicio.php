<?php
/*
 * Escreva um algoritmo que receba um valor de um produto e calcule o desconto de 7%
 * exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto.
 */

$produto = 35;

$valorDescont = ($produto * 7) / 100;

$valorFinal = $produto - $valorDescont;

echo "Valor do produto: R$ {$produto} reais; <br>"
. " Valor do desconto de 7%: <br> R$ {$valorDescont} reais; <br>"
. " Valor final: R$ {$valorFinal} reais";
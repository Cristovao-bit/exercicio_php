<?php
/*
 * Escreva um algoritmo que receba o valor de um produto, acrescente 16% a esse valor
 * divida em 10 parcelas e mostre para o usuário o valor da parcela e o valor total 
 * da compra.
 */

$valor = 200;
$porcent = ($valor * 16) / 100;

$resultado = $valor + $porcent;

$parcel = $resultado / 10;

echo "Valor total da compra {$resultado}";
echo "<br>";
echo "Valor da parcela: {$parcel}";
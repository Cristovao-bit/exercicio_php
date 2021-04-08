<?php
/*
 * Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo
 * exiba o resultado na tela. Ex: entra: 3; precessamento: (3*2)*1; saída: 6
 */

$valor = 3;

if($valor > 0):
    $num = $valor;
    for($i = ($valor - 1); $i > 0; $i--):
        $num = $num * $i;
    endfor;
else:
    $num = 0;
endif;

echo "!{$valor} = {$num}";
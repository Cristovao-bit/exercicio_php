<?php
/*
 * Crie um algoritmo para calcular a média final de um aluno, para isso,
 * solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral.
 * Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado.
 * Exiba também a média final calculada. Ex: n1 =5 | n2 = 10 | n3 = 4 | MG = 6,33 [APROVADO]
 */

$notas = [3.0, 5.0, 6.0];
$smTotal = 0;

for($i = 0; $i < count($notas); $i++):
    $smTotal += $notas[$i];
endfor;

$resultado = $smTotal / count($notas);

if($resultado >= 6):
    echo "Aprovado, média final: " . number_format ($resultado, 1);
else:
    echo "Reprovado, média final: " . number_format($resultado, 1);
endif;
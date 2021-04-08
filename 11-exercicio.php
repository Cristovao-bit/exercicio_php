<?php
/*
 * Escreva um programa para imprimir os números inteiros entre 1 e 10 na mesma linha
 * primeiro em ordem crescente, depois em ordem decrescente.
 */

for($i = 0; $i <= 10; $i++):
    echo $i;
endfor;

echo "<hr>";

for($i = 0; $i >= 10; $i++):
    echo $i;
endfor;

<?php
/*
 * Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique 
 * se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18
 * e tem XX anos ou Fulano não é maior de 18 e tem XX anos.
 */

$nome = "Cristovão";
$idade = 16;

if($idade > 18):
    echo $nome . " é maior de 18 e tem " . $idade . " anos.";
else:
    echo $nome . " é menor de 18 e tem " . $idade . " anos";
endif;
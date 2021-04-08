<?php
/*
 * Escreva um algoritmo que leia o peso e a altura de uma pessoa, calcule o seu 
 * IMC (índice de massa corporal) e exiba para o usuário.
 */

$peso = 15; // kg
$altura = 1.57; // cm

$IMC = number_format($peso / ($altura ** 2), 2);
echo "O índice de massa corporea é: {$IMC} <hr>";

switch ($IMC >= 18.5 || $IMC <= 40.0):
    case ($IMC <= 18.5):
        echo "MENOR QUE 18.5 - MAGREZA";
        break;
    case ($IMC <= 24.9):
        echo "ENTRE 18.5 E 24.9 - NORMAL";
        break;
    case ($IMC <= 29.9):
        echo "ENTRE 25,0 E 29,9 - SOBREPESO";
        break;
    case ($IMC <= 39.9):
        echo "ENTRE 30,0 E 39,9 - OBESIDADE";
        break;
    case ($IMC >= 40.0):
        echo "MAIOR QUE 40,0 - OBESIDADE GRAVE";
        break;
endswitch;
<?php
/*
 * Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão)
 * Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos
 * números
 */
$num1 = filter_input(INPUT_POST, "txtNumero1");
$num2 = filter_input(INPUT_POST, "txtNumero2");
$operacao = filter_input(INPUT_POST, "slOperacao");
$result = "";

if($num1 && $num2):
    switch ($operacao):
        case "+":
            $result = ($num1 + $num2);
            break;
        case "-":
            $result = ($num1 - $num2);
            break;
        case "*":
            $result = ($num1 * $num2);
            break;
        case "/":
            $result = ($num1 / $num2);
            break;
    endswitch;
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Operações</title>
        <style>
            input, select {
                padding: 10px;
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <h1>Resultado: <?= $result; ?></h1>
        <form method="POST">
            <label>Número 1: <input type="text" name="txtNumero1" /></label><br>
            <label>Número 2: <input type="text" name="txtNumero2" /></label><br>
            <label>Operação:
                <select name="slOperacao">
                    <option value="+">Adição</option>
                    <option value="-">Subtração</option>
                    <option value="*">Multiplicação</option>
                    <option value="/">Divisão</option>
                </select>
            </label><br>
            <input type="submit" name="btnCalcular" value="Calcular" />
        </form>
    </body>
</html>

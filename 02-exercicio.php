<!DOCTYPE>
<html>
    <head>
        <meta charset="utf8"/>
        <title>Exercício 02</title>
    </head>
    <body>
        <?php
            /*
            * Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo
            * com o número solicitado, ex: entrada:4, saída: 4x0=0...4x10=40
            */

            if(isset($_POST['imprimir'])):
                $valor = $_POST['valor'];
            
                for ($i = 0; $i <= 10; $i++):
                    echo "{$valor} x {$i} = {$valor} * {$i} <br>";
                endfor;
            endif;
        ?>
        
        <form method="POST">
            <label>
                Valor: <input type="text" name="valor"/>
            </label>
            <input type="submit" name="imprimir" value="Imprimir"/>
        </form>
    </body>
</html>
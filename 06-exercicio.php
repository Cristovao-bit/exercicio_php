<!DOCTYPE>
<html>
    <head>
        <meta charset="utf8"/>
        <title>Exercício 06</title>
        <style>
            input {
                padding: 10px;
                margin: 2px;
            }
        </style>
    </head>
    <body>
        <?php
            /*
            * Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem 
            * crescente em relação aos seus valores. Ex: para A=5, B=4. Você deve imprimir
            * na tela: "4 5". 
            */
            if(isset($_POST['imprimir'])):
                $valor1 = $_POST['valor1'];
                $valor2 = $_POST['valor2'];
                $result = "";
                
                if($valor1 < $valor2):
                    $result = $valor1 . " " . $valor2;
                else:
                    $result = $valor2 . " " . $valor1;
                endif;
                
                echo $result;
            endif;
        ?>
        
        <form method="POST">
            <h2>Ordem crescente: <?= $result; ?></h2>
            <label>
                Valor 01: <input type="text" name="valor1"/>
            </label>
            <br>
            <br>
            <label>
                Valor 02: <input type="text" name="valor2"/>
            </label>
            <input type="submit" name="imprimir" value="Imprimir"/>
        </form>
    </body>
</html>
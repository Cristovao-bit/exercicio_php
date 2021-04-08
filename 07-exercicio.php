<!DOCTYPE>
<html>
    <head>
        <meta charset="utf8"/>
        <title>Exercício 07</title>
        <style>
            input {
                margin: 2px;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <?php
            /*
            * Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor
            * que o valor da variável B. A mensagem a ser impressa deve ser "A maior que B"
            * ou "A menor que B".
            */

            if(isset($_POST['imprimir'])):
                $valorA = $_POST['valorA'];
                $valorB = $_POST['valorB'];
                
                if($valorA > $valorB):
                    echo "{$valorA} maior que {$valorB}";
                else:
                    echo "{$valorA} menor que {$valorB}";
                endif;
            endif;
        ?>
        
        <form method="POST">
            <label>
                Valor de A: <input type="text" name="valorA"/>
            </label>
            
            <label>
                Valor de B: <input type="text" name="valorB"/>
            </label>
            
            <input type="submit" name="imprimir" value="Resultado"/>
        </form>
    </body>
</html>
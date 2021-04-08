<!DOCTYPE>
<html>
    <head>
        <meta charset="utf8"/>
        <title>Exercício 05</title>
    </head>
    <body>
        <?php
            /*
            *   Solicite a entrada de um número e descubra se um número digitado é par ou ímpar
            */
            if(isset($_POST['imprimir'])):
                $valor = $_POST['valor'];
            
                if($valor % 2 == 0):
                    echo "O valor {$valor} é: Par";
                else:
                    echo "O valor {$valor} é: Ímpar";
                endif;
            endif;
        ?>
        
        <form method="POST">
            <label>
                Valor:
                <input type="text" name="valor"/>
            </label>
            <input type="submit" name="imprimir" value="Imprimir"/>
        </form>
    </body>
</html>
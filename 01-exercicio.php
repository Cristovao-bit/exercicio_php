<!DOCTYPE>
<html lang="pt-br">
    <head>
        <meta charset="utf8" />
        <title>Exercício 01</title>
    </head>
    <body>
        <?php
        /*
        * 1. Crie um algoritmo que receba um número digitado pelo usuário e verifique 
        * se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo"
        * "Valor Negativo" ou "Igual a Zero".
        */
        if(isset($_POST['imprimir'])):
            $valor = $_POST['valor'];
            $resultado = "";
        
            if($valor > 0):
                $resultado = "Valor Positivo: " . $valor;
            elseif($valor < 0):
                $resultado = "Valor negativo: " . $valor;
            else:
                $resultado =  "Valor igual a zero: " . $valor;
            endif;
            
            echo $resultado;
        endif;
        ?>
        
        <form method="POST">
            <label>
                Valor:
                <input type="text" name="valor" />
            </label>
            <input type="submit" name="imprimir" value="Imprimir"/>
        </form>
    </body>
</html>

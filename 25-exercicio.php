<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <?php
        /*
         * Construa um programa em PHP que peça para que um valor inteiro e positivo
         * seja digitado e imprima/escreva uma mensagem informando se este número é par
         */
        if(isset($_POST['imprimir'])):
            $num = $_POST['valor'];
        
            if($num % 2 == 0):
                echo "Este número é par: {$num}";
            else:
                echo "Este número é impar: {$num}";
            endif;
        endif;
        ?>
        
        <form method="POST">
            <label>
                Valor: <input type="text" name="valor" />
            </label>
            <input type="submit" name="imprimir" value="Imprimir"/>
        </form>
    </body>
</html>

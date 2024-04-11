<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
    <!-- 
        tipos primitivos
        divido em ESCALARES, COMPOSTOS E ESPECIAIS.


        ESCALARES
        -int ou integer (inteiro)
        -float ou double( flutuante obs: existia o real, mas foi descontinuado a partir do php 7.4)
        -string (sequencia de palavras ou caracteres)
        -bool ou boolean (sistema boleano de verdadeiro ou falso


        COMPOSTO
        -Array (arranjo)
        -object

        ESPECIAIS
        -null
        -resource
        -callabe
        -mixed(introduzido no php 8.0, mistura todos os tipos primitivos.)
        
        )
     -->
</head>
<body>
    <?php
    //0x = hexadecimal 0b = binario 0=Octal
        // $num = 0b010101;
        // echo "O valor da variavel é $num";
        // $v = 300;
        // var_dump($v); mostra o tipo de variavel
        // $num = 3e2; //3x10(^2)
        // echo "variavel é $num"
        // $num = (integer)"650";
        // var_dump($num);
        // $vet = [6, 2.6, "Maria", 3, False];
        // var_dump($vet);

        class pessoa{
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p)
    ?>
    
</body>
</html>
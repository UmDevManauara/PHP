<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>

    <!-- 
        tipos primitivos: divido em ESCALARES, COMPOSTOS E ESPECIAIS.


        ESCALARES
        -int ou integer (inteiro)
        -float ou double( flutuante obs: existia o real, mas foi descontinuado a partir do php 7.4)
        -string (sequencia de palavras ou caracteres)
        -bool ou boolean (sistema boleano de verdadeiro ou falso


        COMPOSTOS
        -Array (arranjo)
        -object

        ESPECIAIS
        -null
        -resource
        -callabe
        -mixed(introduzido no php 8.0, mistura todos os tipos primitivos.)
        
        
     -->
</head>
<body>
    <?php
        // EXERCICIO TIPOS DE VARIAVEIS 

        //0x = hexadecimal 0b = binario 0=Octal
        //
        // $num = 0b010101; // como iniciou com 0b, num é uma variavem do tipo binario.
        // echo "O valor da variavel é $num";


        //EXERCICIO MOSTRAR O  TIPO DE VARIAVEL ATRAVES DA FUNÇÃO var_dump()
        //
        // $v = 300;
        // var_dump($v); //mostra o tipo de variavel
        
        
        // $num = 3e2; //3x10(^2)
        // echo "variavel é $num"
        // $num = (integer)"650";
        // var_dump($num);

        //EXERCICIO CRIAÇÃO DE ARRAY - TIPOS PRIMITIVO COMPOSTOS
        //
        // $vet = [6, 2.6, "Maria", 3, False];
        // var_dump($vet);

        //EXERCICIO CRIAÇÃO DE OBJECT - TIPOS PRIMITIVO COMPOSTOS
        //
        // class pessoa{
        //              private string $nome;
        //             }
        // $p = new Pessoa;
        // var_dump($p)


        //EXERCICIO DE USO DE ASPAS EM UM UNICO ECHO - UTILIZANDO ESCAPE SEQUENCES
        //
        // $nome = "Matheus";
        // $sobrenome = " Alves" ;
        // echo "$nome \"Coronel\" $sobrenome"; 
        //    
        // usar contra barra (\) antes para representar algo de valor semantico, no php se chama sequencia de escape ou escape sequences
        //
        // TIPOS DE ESCAPE SEQUENCES 
        //
        // Nova linha            -      \n
        // Tabulação Horizontal  -      \t
        // Barra invertida       -      \\
        // Sinal de cifrão       -      \$
        // Codepoint Unicode     -      \u{}

        
        // FORMATOS DE STRING: 1-double quoted "aspas duplas" 2-single quoted 'aspas simples' 3-String Heredoc 4-String Nowdoc.
      
        // STRING DOUBLE QUOTED (ASPAS DUPLAS):
        // echo "$nome $sobrenome" >>>> Matheus Alves // sintaxe é compreendida
     
        // STRING SINGLE QUOTED ( ASPAS SIMPLES):
        // echo '$nome $sobrenome" >>>> $nome $sobrenome // php não entende semantica e printa ao pé da letra.
        
        //STRING HEREDOC - Caracteristicias de aspas duplas e pode colocar texto em multiplas linhas. vantagem: quebrar linha em formato texto.Não funciona em HTML.
        // 
        // $curso = "Curso em video PHP";
        // $ano = date ("Y");
        // echo <<< FRASE
        //
        // Estou estudando 
        //     $curso 
        //         em $ano
        // FRASE;

        //STRING NOWDOC- Caracteristicias de aspas simples (nao contem interpretação.) e pode colocar texto em multiplas linhas. vantagem: quebrar linha em formato texto.Não funciona em HTML.

        

    ?>

</body>
</html>
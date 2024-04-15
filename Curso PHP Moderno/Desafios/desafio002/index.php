<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 1</title>
    <link rel="stylesheet" href="style-treino.css">k
</head>

<body>
    <header>
        <h1>Trabalhanado com numero aleatorios</h1>
    </header>
    <section>
        <p>
            <?php
            $numero = mt_rand(min:0, max:100); 
            //rand() - 1951 - Linear Congrential Generator - nao muito confiavel e antigo.
            //mt_rand()- 1997 - Mersene Twister - 4x mais rapido, mais moderno e mais confiavel.
            //A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
            //random_int() gera numero aleatorios criptograficamente seguros
            echo "<p> Gerando um numero aleatorio entre 0 e 100... <br>
            O valor gerado foi: <strong> $numero</strong></p>"; 

            ?>


        </p>
        <button onclick="javascript:document.location.reload()"> Gerar outro numero</button>



    </section>

</body>

</html>
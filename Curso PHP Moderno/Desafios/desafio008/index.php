<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style-treino.css">
</head>

<body>
  
        
   
    <section>
        <h1>Informe um numero</h1>
        <?php 
        //Capturando os dados do formulario retroalimentado
        $numero = $_GET["numero"] ?? "FUNCIONA";
        
        
         ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número:</label>
            <input type="text" name="numero" id="inumero" autocomplete="off"  value="<?=$numero?>">
            <input type="submit" value="calcular Raízes" >
        </form>

        <section>
            <h2>Resultado final</h2>
            <?php
           $rq = $numero ** (1/2);
           $rc = $numero ** (1/3);
            // ** o mesmo que elevado 
           
            
            
            echo
                "<p>Analisando o <strong>número $numero </strong>temos:"; 
            echo
                "<ul><li>A sua raiz quadrada é <strong>". number_format($rq, 2, ",", "."). "</strong></li>";
            echo 
                "<li>A sua raiz cúbida é <strong>". number_format($rc, 2, ",", "."). "</strong></li></ul>";

            ?>
        </section>

 
    </section>
    
</body>
</html>
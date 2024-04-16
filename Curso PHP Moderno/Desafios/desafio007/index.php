<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style-treino.css">
</head>

<body>
  
        
   
    <section>
        <h1>Informe seu salario</h1>
        <?php 
        //Capturando os dados do formulario retroalimentado
        $salario = $_GET["salario"] ?? 0;
        
        
         ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salario (R$):</label>
            <input type="number" name="salario" id="salario" autocomplete="off" step="0.001" value="<?=$salario?>">
            <p>considerando salário minimo de <strong>R$ 1.412,00</strong></p>
            <input type="submit" value="calcular" >
        </form>

        <?php 
        $minimo = 1412;
        $salarioMinimo = intdiv($salario, $minimo);
        $restante = number_format($salario - ($salarioMinimo * $minimo), 2, ",", ".");
        // intdiv = divisoes inteira diferente do / que é uma divisao real
        // % resto de uma divisao.
        
        
        echo 
        " <div>
                
        <p>Quem recebe um salário de R\$$salario ganha <strong>$salarioMinimo Salários mínimos </strong>+ R\$$restante</p> 
        
        </div>";
        ?>

 
    </section>
    
</body>
</html>
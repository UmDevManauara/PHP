<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios retroalimentados</title>
    <link rel="stylesheet" href="style-treino.css">
</head>
<body>
    <?php 
        //Capturando os dados do formulario retroalimentado
        $valor1 = $_GET["valor1"] ?? 0;
        $valor2 = $_GET["valor2"] ?? 0;
        
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Valor 1</label>
            <input type="number" name="valor1" id="ivalor1" value="<?= $valor1?>" >
            <label for="valor2">Valor 2</label>
            <input type="number" name="valor2" id="ivalor2" value="<?= $valor2?>">
            <input type="submit" value="Somar">

        </form>

    </main>
    <section>
        <h2>Resultado da Soma</h2>
        <?php 
            $soma = ($valor1 + $valor2);
            echo "A soma entre os valores $valor1 e $valor2 é igual a $soma"
        ?>
    </section>
    
</body>
</html>
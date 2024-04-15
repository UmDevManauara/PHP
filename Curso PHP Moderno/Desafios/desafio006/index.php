<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style-treino.css">
</head>

<body>
    <header>
        <h1>Anatomia de uma divisão:</h1>
    </header>
    <section>
        <?php 
        //Capturando os dados do formulario retroalimentado
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 1;
        
         ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="idividendo" autocomplete="off" step="0.001" value= "<?=$dividendo?>">
            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="idivisor" autocomplete="off" step="0.001" value="<?=$divisor?>">
            <input type="submit" value="Analisar" >
        </form>

        <?php 
        // intdiv = divisoes inteira diferente do / que é uma divisao real
        // % resto de uma divisao.
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
        echo "
                <table class = \"divisao\">
                    <tr>
                        <td > 
                            ". number_format($dividendo) . "
                        </td>
                        <td>
                            ". number_format($divisor) . "
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                        ". number_format($resto, 0) . "
                        </td>
                        <td>
                        ". number_format($quociente, 0) . "
                        </td>
                    </tr>
                </table>     
             ";
        ?>


    </section>
    
</body>
</html>
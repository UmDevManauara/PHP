<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de número real</title>
    <link rel="stylesheet" href="style-treino.css">
</head>

<body>
    <section>
        <?php
            $numReal = $_POST["numero"] ?? 0;
            echo "<p> Analisando o número <strong>" . number_format($numReal, 3, ",", "." ). "</strong> informado pelo usuario: </p>";
            $int = (int) $numReal;
            $fra = $numReal - $int;

            echo "<ul><li> A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong>";
            echo "<li> A parte fracionada do número é <strong>" . number_format($fra, 3, ",", ".") . "</strong>";
        ?>
        
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>

</body>

</html>
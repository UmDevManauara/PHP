<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 1</title>
    <link rel="stylesheet" href="style-treino.css">
</head>
<body>
 
    <section>
        <p>
            <?php
            $numero = $_GET["numero"];
            echo "<p>Seu numero é <strong>$numero!</strong>";
            echo " <p>O sucessor de $numero é <strong>" .  ($numero + 1) . "!</strong>";
            echo "<p>O antecessor de $numero é <strong>" .  ($numero - 1) . "!</strong>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    
    </section>
    
</body>
</html>
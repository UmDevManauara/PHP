<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style-treino.css">
</head>

<body>
    <header>
        <h1>Resuldado do processamento</h1>
    </header>
    <main>
        <?php
        //var_dump($_REQUEST);  //$_REQUEST é a junção de $_GET, $_POST e $_COOKIES
        $nome = $_GET["nome"] ?? "Sem nome";
        $sobrenome = $_GET["sobrenome"]?? "Desconhecido";
        echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é meu site";


        ?>
        <br>
        <a href="javascript:history.go(-1)"> Voltar para a página anterior.</a>
    </main>

</body>

</html>
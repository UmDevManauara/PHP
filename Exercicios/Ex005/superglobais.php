<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
    <link rel="stylesheet" href="style-treino.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA",time() + 3600);
                session_start();
                $_SESSION["Teste"] = "FUNCIONOU!";
                
                echo "<h1>Suberglobal GET </h1>";
                var_dump($_GET);

                echo "<h1>Suberglobal POST </h1>";
                var_dump($_POST);

                echo "<h1>Superglobal REQUEST </h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal COOKIE </h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal SESSION </h1>";
                var_dump($_SESSION);

                echo "<h1> Superglobal ENV</h1>";
                var_dump($_ENV);

                echo "<h1> Superglobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1> Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
            
        </pre>
        <button style = "background-color:lightgray"><a href="javascript:history.go(-1)"> Voltar para a página anterior.</a></button>

    </main>
    
</body>
</html>
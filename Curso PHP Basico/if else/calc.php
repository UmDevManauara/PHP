<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pode votar?</title>
    <link rel="stylesheet" href="style-treino.css">
</head>
<body>
 
    <section>
        <p>
            <?php
            $idade = $_GET["idade"];
            
            if ($idade >= 18) {
                $vota = true;
                echo "Você tem $idade anos,  portanto pode votar";
           
           } else {
           
               $vota = false;
               echo "Você tem $idade anos, portanto não tem idade para votar";
           
           }
           
           
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    
    </section>
    
</body>
</html>
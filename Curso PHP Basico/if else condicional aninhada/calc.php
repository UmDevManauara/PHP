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
            $peso = $_GET["peso"];
            
            
            if ($peso <= 50) {

                echo  "muito magro";
            
            } else {
            
                if ($peso >50 && $peso <=70) {
            
                      echo "peso normal";
            
                 } else {
            
                    echo "acima do peso";
            
                 }
            
            }
           
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    
    </section>
    
</body>
</html>
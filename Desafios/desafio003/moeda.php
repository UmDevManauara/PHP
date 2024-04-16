<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style-treino.css">
</head>

<body>
    <section>
        <?php
        $cotacao = 5.12;
        $seuDinheiro = $_GET["seuDinheiro"];
        // jeito padrao
        // echo "Seu dinheiro atual no valor de R\$" . number_format($seuDinheiro, 2, ",", ".") ." a cotação usada foi $cotacao, o valor em dolar é: \$" . number_format($seuDinheiro/ $cotacao, 2, ",", ".");

        //jeito internacional
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        echo "Seu dinheiro atual no valor de " . numfmt_format_currency($padrao, $seuDinheiro, "BRL") ." a cotação usada foi $cotacao, o valor em dolar é: " . numfmt_format_currency($padrao, $seuDinheiro/ $cotacao, "USD")
        ?>
        <p>
            <button onclick="javascript:history.go(-1)">Voltar</button>
         </p>
    </section>

</body>

</html>
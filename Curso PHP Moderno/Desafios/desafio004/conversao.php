<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversor de moedas V2</title>
    <link rel="stylesheet" href="style-treino.css">
</head>

<body>
    <section>
        <?php
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'USD\'&@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true); //false = object \\ true = array

            //var_dump($dados);
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            $seuDinheiro = $_GET["numero"];
            // jeito padrao
            // echo "Seu dinheiro atual no valor de R\$" . number_format($seuDinheiro, 2, ",", ".") ." a cotação usada foi $cotacao, o valor em dolar é: \$" . number_format($seuDinheiro/ $cotacao, 2, ",", ".");

            //jeito internacional
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            echo "Seu dinheiro atual no valor de " . numfmt_format_currency($padrao, $seuDinheiro, "BRL") . " usando a cotação atual de $cotacao, o valor em dolar é: " . numfmt_format_currency($padrao, $seuDinheiro / $cotacao, "USD")

        ?>
        <p style="font-size: 0.8em;">Cotação fornecida pela API do banco central do brasil.</p>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>

</body>

</html>
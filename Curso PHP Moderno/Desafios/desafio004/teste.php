<pre>
    <?php
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");
     $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'USD\'&@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
     $dados = json_decode(file_get_contents($url), true); //false = object \\ true = array
    
     //var_dump($dados);
     $cotacao = $dados["value"][0]["cotacaoCompra"];
     echo "a cotação foi $cotacao"
    
    ?>
</pre>
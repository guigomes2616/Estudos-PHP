<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 3</title>
</head>

<body>

    <main>
        <h1>Resultado Final:</h1>

        <?php

            // Define o início e o fim do período de consulta (últimos 7 dias)
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            // Monta a URL da API com os parâmetros necessários
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            // Faz a requisição à API e decodifica o JSON retornado
            $dados = json_decode(file_get_contents($url), true);

            // Obtém a cotação de compra do dólar
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            // Obtém o valor em reais do formulário
            $valorReal = $_REQUEST['real'];
            
            // Calcula o valor convertido para dólares
            $valorConvert = $valorReal / $cotacao;

            // Cria um formatador para moeda brasileira
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            // Exibe o valor original em reais e o valor convertido em dólares
            echo "<p> Seus ". numfmt_format_currency($padrao, $valorReal, "BRL") ." equivalem a ". numfmt_format_currency($padrao, $valorConvert, "USD") ."</p>";
        ?>
        <button><a href="12-Conversor-Moeda-2.0.php">Voltar</a></button>

    </main>

</body>
</html>
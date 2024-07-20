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
            // Obtém o valor em reais do formulário
            $valorReal = $_REQUEST['real'];
            
            // Define a taxa de conversão fixa para euros
            $valorEuro = 6.10;
            
            // Calcula o valor convertido para euros
            $valorConvert = $valorReal / $valorEuro;

            // Cria um formatador para moeda brasileira e europeia
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            // Exibe o valor original em reais e o valor convertido em euros
            echo "<p> Seus ". numfmt_format_currency($padrao, $valorReal, "BRL") ." equivalem a ". numfmt_format_currency($padrao, $valorConvert, "EUR") ."</p>";
            
        ?>
        <!-- Botão para voltar à página anterior -->
        <button><a href="11-Conversor-Moeda-1.0.php">Voltar</a></button>

    </main>

</body>
</html>
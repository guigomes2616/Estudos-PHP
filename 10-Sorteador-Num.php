<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 2 - Sorteador de Números</title>
</head>

<body>
    <header><h1>Desafio 2 - Sorteador de Números</h1></header>

    <section>
        <form>
            <h1>Trabalhando com números aleatórios</h1>

            <?php
            // Define o intervalo para o número aleatório
            $numMin = 0;
            $numMax = 100;

            // Gera um número aleatório entre numMin e numMax
            $numA = mt_rand($numMin, $numMax);

            // Exibe o intervalo e o número gerado
            echo "<p>Gerando um número aleatório entre $numMin e $numMax</p>";
            echo "<p>O número gerado foi: <strong>$numA</strong></p>";
            ?>
            
            <!-- Botão para gerar um novo número -->
            <button type="submit" name="generate">Gerar outro número</button>

        </form>
    </section>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>
    
</body>
</html>
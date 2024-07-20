<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 1</title>
</head>

<body>


    <main>
        <h1>Resultado Final:</h1>
        <?php
            // Obtém o número enviado pelo formulário
            $number = $_REQUEST['num'];

            // Calcula o antecessor e o sucessor do número fornecido
            $numberAnt = $number - 1;
            $numberSus = $number + 1;

            // Exibe o número fornecido pelo usuário
            echo "<p> O número escolhido foi <strong>$number</strong></p>";

            // Exibe o antecessor do número
            echo "<p> O seu Antecessor é <strong>$numberAnt</strong></p>";

            // Exibe o sucessor do número
            echo "<p> O seu Sucessor é <strong>$numberSus</strong></p>"; 
        ?>
        <!-- Botão para voltar à página anterior -->
        <button><a href="9-Antecessor-Sucessor.php">Voltar</a></button>

    </main>

</body>
</html>
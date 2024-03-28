<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Cadatro</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento:</h1>
    </header>

    <main>
        <?php 
            $nome = $_GET['nome'] ?? "Sem nome";
            $sobnome = $_GET['sobrenome'] ?? "Desconhecido";

            echo "<p> É um prazer te conhecer <strong> $nome $sobnome </strong>! Este é o meu primeiro fomulário em PHP </p>";
        ?>
    </main>

    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Primeiro Formulário</title>
</head>

<body>
    <header><h1>Apresenta-se</h1></header>

    <section>
        <form action="8-Cadastro.php" method="get">

            <label for="nome" >Nome:</label>
            <input type="text" name="nome" id="idnome">

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="idsobrenome">

            <input type="submit" value="Enviar">
        </form>
    </section>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>
    
</body>
</html>
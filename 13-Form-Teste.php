<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Formulário Aula 13</title>
</head>

<body>

    <main>
        <form action="13-SuperGlobais.php?tipo=Aluno&turno=Noite" method="POST">

            <label for="nome" >Nome:</label>
            <input type="text" name="nome" id="idnome">

            <label>Senha:</label>
            <input type="password" name="pass" id="idpass">

            <input type="submit" value="Enviar">
        </form>
</main>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>
    
</body>
</html>
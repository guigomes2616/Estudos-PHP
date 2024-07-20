<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 4 - Conversor de Moeda</title>
</head>

<body>
    <header><h1>Desafio 4 - Conversor de Moeda 2.0</h1></header>

    <section>
        <form action="12-Dados-desafio4.php" method="POST" onsubmit="return validateForm()">

            <label>Valor em R$:</label>
            <input type="number" name="real" id="idreal" >

            <input type="submit" value="Converter">
        </form>
    </section>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>
    
    <script>
       // Foca automaticamente no campo de entrada quando a página é carregada
       onload = function() {
            document.getElementsByName('real')[0].focus();
        }

        // Valida o formulário para garantir que o campo não está vazio
        function validateForm() {
            var num = document.getElementById('idreal').value;
            if (num.length == 0) {
                alert("[ERRO!] Por favor, preencha o campo corretamente!");
                return false; // Impede o envio do formulário se o campo estiver vazio
            } else {
                return true; // Permite o envio do formulário se o campo estiver preenchido
            }
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Desafio 1 - Antessor e Sucessor</title>
</head>

<body>
    <header><h1>Desafio 1 - Antecessor e Sucessor</h1></header>

    <section>
        <form action="9-Dados-desafio1.php" method="POST" onsubmit="return validateForm()">

            <h1>Informe um número</h1>

            <label for="number" >Número:</label>
            <input type="number" name="num" id="idnum" >

            <input type="submit" value="Enviar">
        </form>
    </section>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>
    
    <script>
      // Script que foca no campo de entrada assim que a página é carregada
    onload=function(){
        document.getElementsByName('num')[0].focus();
    }

    // Função de validação do formulário
    function validateForm() {
        var num = document.getElementById('idnum').value;
        if (num.length == 0) {
            alert("[ERRO!] Por favor, preencha o campo corretamente!");
            return false;
        } else {
            return true;
        }
    }
    </script>
</body>
</html>
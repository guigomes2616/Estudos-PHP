<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora Básica</h1>

    <form action="4-Calcular.php" method="post">
        <label>Número 1:</label>
        <input type="number" name="num1" id="num1">

        <br>

        <label for="operacao">Operação:</label>
        <select name="operacao" id="operacao">

            <option value="som">Adição(+)</option>
            <option value="sub">Subtração(-)</option>
            <option value="mult">Multiplicação(X)</option>
            <option value="div">Divisão(/)</option>

        </select>

        <br>

        <label>Número 2:</label>
        <input type="number" name="num2" id="num2">

        <br>

       <button type="submit">Calcular</button>
    </form>
    
</body>
</html>
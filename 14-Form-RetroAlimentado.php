<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Formulário RetroAlimentado</title>
</head>

<body>
    <header><h1>Soma de Números</h1></header>

    <section>
        <?php 
            $valor1 = $_POST['num1'] ?? 0;
            $valor2 = $_POST['num2'] ?? 0;
        ?>
        <form action="
            <?= $_SERVER['PHP_SELF']?>" method="POST">

            <label>Número 1:</label>
            <input type="number" name="num1" id="idnum1" value="<?=$valor1?>">

            <label>Número 2:</label>
            <input type="number" name="num2" id="idnum2" value="<?=$valor2?>">

            <input type="submit" value="Somar">
        </form>
    </section>
        

    <section id="resultado">
        <h2>Resultado da Soma</h2>

        <?php 
            $soma = $valor1 + $valor2;

            echo "A soma entre $valor1 + $valor2 = $soma";
        ?>
    </section>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>
    
</body>
</html>
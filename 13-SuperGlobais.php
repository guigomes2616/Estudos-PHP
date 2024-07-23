<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="8-Formulario.css">
    <title>Aula 13</title>
</head>

<body>
    <header><h1>SuperGlobais</h1></header>

    <main>
        <?php
            session_start();
            $_SESSION["teste"]= "FUNCIONOU!";

            setcookie("dia-da-semana", "TERÇA-FEIRA", time() + 3600);

            echo "<h1>Superglobal GET </h1>";
            var_dump($_GET);

            echo "<h1>Superglobal POST </h1>";
            var_dump($_POST);

            echo "<h1>Superglobal REQUEST </h1>";
            var_dump($_REQUEST);

            echo "<h1>Superglobal COCKIE </h1>";
            var_dump($_COOKIE);

            echo "<h1>Superglobal SESSION </h1>";
            var_dump($_SESSION);

            echo "<h1>Superglobal SERVER </h1>";
            var_dump($_SERVER);

            echo "<h1>Superglobal ENV </h1>";
            //var_dump($_ENV);
            foreach(getenv() as $c => $v){
                echo "<br>$c -> $v</br>";
            }

            echo "<h1>Superglobal GLOBALS </h1>";
            var_dump($GLOBALS);
        ?>
    </main>

    <footer>
        &copy;Guilherme Gomes da Silva
    </footer>
    
</body>
</html>
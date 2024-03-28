<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>

<body>

<h1>Tipos Primitivos</h1>
    <?php 
        /*$n1= 0x1A;
        
        var_dump($num1);*/

        $n2 = 300; //Tipo INT
        var_dump($n2);

        $n3 = 3e2; //Tipo FLOAT
        var_dump($n3);

        $n4 = (integer)"950"; //Coerção
        var_dump($n4);

        $n5 = true; //Tipo BOO/BOOLEAN
        var_dump($n5);
        echo "O valor da variável é $n5";

        $vet = [6, 2.5, "Maria", false];
        var_dump($vet);

        class Pessoa{
            private string $nome;
        }

        $pessoa = new Pessoa;
        var_dump($pessoa);
    ?>
    
</body>
</html>
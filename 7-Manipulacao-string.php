<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de String</title>
</head>

<body>
    <h2>String em Aspas Duplas(Double Quoted):</h2>
    <?php 
        $nome = "Guilherme";
        $sobrenome = "Gomes";
        echo "$nome "."$sobrenome \u{1F596}"; //. Serve para concatenar // Asplas dulpas vai interpretar o conteúdo
    ?>

    <h2>String em Aspas Simples(Single Quoted):</h2>
    <?php 
        $Nome = 'Guilherme';
        $Sobrenome = 'Gomes';
        echo "$Nome "."$Sobrenome".'\u{1F596}'; //Asplas simples não vai interpretar o conteúdo
    ?>

    <h2>String com Constante:</h2>
    <?php 
        const ESTADO = "SP";
        echo "Eu moro em ".ESTADO. " no ano de ".date('Y');
    ?>

    <h2>Meu jogador de futebol favorito é:</h2>
    <?php 
        $nom = "Cristiano";
        $sobnom = "Ronaldo";
        echo "$nom \"CR7\" $sobnom"; // \"texto\" -> Serve para concatenar textos dentro de texto (aspas duplas dentro de aspas duplas) 
    ?>

    <h2>String em Herdoc: </h2>
    <?php 
        $ling = "PHP";
        $ano = date('Y');

        echo <<< TESTE
            Estou estudando a linguagem $ling
                        em $ano !
        TESTE;
    ?>

    
<h2>String em Nowdoc: </h2>
    <?php 
        $ling = "PHP";
        $ano = date('Y');

        echo <<< 'TESTE'
            Estou estudando a linguagem $ling
                        em $ano !
        TESTE;
    ?>
</body>
</html>
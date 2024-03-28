<?php 

$n1 = $_POST["num1"];
$n2 = $_POST["num2"];
$op = $_POST["operacao"];

function calcular($op, $n1, $n2){
    switch($op){
        case "som":
            return $n1 + $n2;
            break;

        case "sub":
            return $n1 - $n2;
            break;

        case "mult":
            return $n1 * $n2;
            break;

        case "div":
            if($n2 == 0){
                return "Impossível divisão por zero, tente novamente!" ;

            }else{
                return $n1 / $n2;
            }
    }
}

$resultado = calcular($op, $n1, $n2);
echo "Resultado da operação é: ".$resultado;

?>
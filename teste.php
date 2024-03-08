<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>

<body>
    
    <?php 
    // variáveis
    $indice = 13;
    $soma = 0;
    $k = 0;

    // Loop para fazer a soma
    while($k < $indice) {
        $k++;
        $soma += $k ;
        
    }
    // Resultado
    echo $soma;
    ?>

    <br>

    <?php

function Fibo($num) {
    $a = 0;
    $b = 1;

    while ($a < $num) {
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
    }

    if ($a == $num) {
        return "O número $num pertence à sequência de Fibo.";
    } else {
        return "O número $num não pertence à sequência de Fibonacci.";
    }
}

// Digite o número que deseja verificar
$numero = 13; // Altere aqui o número que deseja verificar

$mensagem = Fibo($numero);
echo $mensagem;

?>

<br>

<?php

function inverterString($str) {
    $strinver = '';
    
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $strinver .= $str[$i];
    }
    
    return $strinver;
}


$string = "subi no onibus";//palavra que vai ser invertida

$strinvertida = inverterString($string);
echo "String original: " . $string . "<br>";
echo "String invertida: " . $strinvertida;

?>
    
    


</body>
</html>
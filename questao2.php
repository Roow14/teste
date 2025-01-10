<?php
// Questão 2:
// Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores,
// escreva um programa onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando 
// se o número informado pertence ou não à sequência.

function isFibonacci($num) {
    $a = 0;
    $b = 1;

    if ($num == $a || $num == $b) {
        return true;
    }

    while ($b < $num) {
        $temp = $b;
        $b = $a + $b;
        $a = $temp;
    }

    return $b == $num;
}

// Número informado
$numero = 21;

if (isFibonacci($numero)) {
    echo "O número $numero pertence à sequência de Fibonacci.";
} else {
    echo "O número $numero NÃO pertence à sequência de Fibonacci.";
}
?>

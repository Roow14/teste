<?php
// Questão 5:
// Escreva um programa que inverta os caracteres de uma string sem usar funções prontas como reverse.

function reverseString($string) {
    $invertida = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $invertida .= $string[$i];
    }
    return $invertida;
}

// String de exemplo
$string = "Exemplo";
echo "String original: $string\n";
echo "String invertida: " . reverseString($string);
?>

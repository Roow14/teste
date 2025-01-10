<?php
// Questão 3:
// Dado um vetor que guarda o valor de faturamento diário de uma distribuidora,
// calcule e retorne o menor valor de faturamento, o maior valor de faturamento 
// e o número de dias em que o valor foi superior à média mensal.

$json = '[
    221.12, 0, 435.45, 123.45, 0, 543.21, 321.43, 654.32, 0, 876.54, 
    432.10, 0, 0, 654.76, 234.65, 765.43, 0, 987.65, 0, 456.78
]';

$faturamento = json_decode($json, true);

$valores_validos = array_filter($faturamento, fn($valor) => $valor > 0);

$menor = min($valores_validos);
$maior = max($valores_validos);
$media = array_sum($valores_validos) / count($valores_validos);

$dias_acima_da_media = count(array_filter($valores_validos, fn($valor) => $valor > $media));

echo "Menor valor de faturamento: R$ $menor\n";
echo "Maior valor de faturamento: R$ $maior\n";
echo "Número de dias acima da média: $dias_acima_da_media";
?>

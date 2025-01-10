<?php
// Questão 4:
// Dado o valor de faturamento mensal de uma distribuidora por estado, calcule o percentual de representação de cada estado.

$faturamento = [
    "SP" => 67836.43,
    "RJ" => 36678.66,
    "MG" => 29229.88,
    "ES" => 27165.48,
    "Outros" => 19849.53
];

$total = array_sum($faturamento);

echo "Percentual de representação por estado:\n";
foreach ($faturamento as $estado => $valor) {
    $percentual = ($valor / $total) * 100;
    echo "$estado: " . number_format($percentual, 2) . "%\n";
}
?>

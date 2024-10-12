<h1>Exercice 2 </h1>



<h2>Résultat</h2>



<?php

function francsToEuros($francs) {
    // 1 ancien franc = 0,1524 euros
    $conversionRate = 0.1524;
    return $francs * $conversionRate;
}

$francs = 100;
$euros = francsToEuros($francs);
echo "Montant en francs : $francs <br>";
echo "$francs = " . number_format($euros, 2, ',', ' ') . " €";
?>
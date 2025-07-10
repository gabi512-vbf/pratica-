<?php
$idade = readline("Digite sua idade: ");
if ($idade < 18) {
    echo "Menor de idade";
} elseif ($idade < 60) {
    echo "Adulto";
} else {
    echo "Idoso";
}
?>
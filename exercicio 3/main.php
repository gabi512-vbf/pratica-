<?php
$n1= readline("insira o primeiro numero:"); 
$n2= readline("insira o segundo numero:");


if ($n2 == 0) {
    echo "Não é possível dividir por zero.";
} elseif ($n1 % $n2 == 0) {
    echo "O primeiro número é divisível pelo segundo.";
} else {
    echo "O primeiro número NÃO é divisível pelo segundo.";
}

?>
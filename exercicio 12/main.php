<?php
$ht=readline("digite as horas trabalhadas no mes:");
$vh= readline("digite o valor das horas trabalhadas:");
$pd= readline("digite o percentual de deconto:");

$sb= $ht*$vh;
$td= ($pd/100)*$sb;
$sl= $sb-$td;


echo"horas trabalhdas:$ht\n"; 
echo"salario bruto:$sb".number_format($sb,2,',','.')."\n";
echo"desconto:$td".number_format($td,2,',','.')."\n";;
echo"salario liquido: $sl".number_format($sl,2,',','.')."\n";;


?>
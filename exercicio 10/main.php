<?php
$entrada= readline("digite os numeros separados por virgula:");
$numero=explode(",",$entrada);
$soma=0;

foreach ($numero as $num){
    
    $soma+= (int) trim($num);
    
}

echo("a soma dos numeros e: $soma\n");
?>
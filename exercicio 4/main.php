<?php

$temp= readline(" qual a temperatura:");

if ($temp<10) {
    echo("esta frio");
}
elseif ($temp>20) {
    echo("esta calor");
}
else {
    echo("esta agradavel");
}

?>
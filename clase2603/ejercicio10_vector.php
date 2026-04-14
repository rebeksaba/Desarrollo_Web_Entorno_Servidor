<?php

$nombre = ["cero", "uno", "dos", "tres", "cuatro", "cinco", "seis"];

$dado = rand(1, 6);
print " <p><img src='$dado.png' width='140'></p>\n";
print " <p>Has sacado un <strong>$nombre[$dado]</strong>.</p>\n";

?>
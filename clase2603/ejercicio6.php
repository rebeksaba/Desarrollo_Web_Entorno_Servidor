<?php
define ("PI", 3.14); // Constantes
print "<p>El valor de PI es " . PI . "</p>\n";

$valor = 9;
$valor++; // ++ suma 1 -- restya 1
print "<p>" . $valor++. "</p>\n"; // primero muestra el valor y luego lo incrementa
print "<p>" . $valor--. "</p>\n"; // primero muestra el valor y luego lo decrementa

$numero = 4.7;
$numero1 = round($numero); // redondea al entero más cercano
print "<p>El número redondeado es $numero1</p>\n";
$numero2 = floor($numero); // redondea hacia abajo
print "<p>El número redondeado hacia abajo es $numero2</p>\n";
$numero3 = ceil($numero); // redondea hacia arriba
print "<p>El número redondeado hacia arriba es $numero3</p>\n";
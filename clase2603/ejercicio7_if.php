<?php
print "<h1>Tirada de dado</h1>\n";
$dado = rand(1,6); // genera un número aleatorio entre 1 y 6
print "<p>Has sacado un $dado.</p>\n";
print "<p><img src='$dado.png' width='50'></p>\n";
if ($dado == 6) {
    print "<p>¡Has sacado la máxima puntuación!</p>\n"; 
    
}else {
    print "<p>¡Sigue intentándolo!</p>\n"; 
}
print "<p>¡Gracias por jugar!</p>\n";
?>
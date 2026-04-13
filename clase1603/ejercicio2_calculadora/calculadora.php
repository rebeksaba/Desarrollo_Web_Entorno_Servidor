<?php

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];
    
    switch ($op) {
        case '+':
            $resultado = $n1 + $n2;
            break;
        case '-':
            $resultado = $n1 - $n2;
            break;
        case '*':
            $resultado = $n1 * $n2;
            break;
        case '/':
            if ($n2 != 0) {
                $resultado = $n1 / $n2;
            } else {
                echo "Error: No se puede dividir por cero.";
                exit;
            }
            break;
        default:
            echo "Operación no válida.";
            exit;
    }

    echo "Resultado: " .$resultado;


?>
/* Practica en PHP */

<?php

function cuentaletraA(string $palabra){
    $suma_A = substr_count($palabra, 'a') + substr_count($palabra, 'A');
    echo "El numero total de As es: " + $suma_A;
}

cuentaletraA("Aceituna")


?>
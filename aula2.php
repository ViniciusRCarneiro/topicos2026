<?php
$numeros = [5, 10, 15, 20, 25];

unset($numeros[2]);

echo "Elementos restantes:<br>";

foreach ($numeros as $numero) {
    echo $numero . "<br>";
}
?>
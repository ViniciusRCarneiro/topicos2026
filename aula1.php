<?php
$frutas = ["Maçã", "Banana", "Laranja", "Uva", "Manga"];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

$frutas[] = "Abacaxi";

echo "<hr>Após adicionar nova fruta:<br>";

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>
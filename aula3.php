<?php
$produto = [
    "nome" => "Teclado",
    "preco" => 120.50,
    "estoque" => 15
];

foreach ($produto as $chave => $valor) {
    echo "$chave: $valor <br>";
}
?>
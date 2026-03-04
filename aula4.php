<?php
$alunos = [
    ["nome" => "Ana", "nota" => 8],
    ["nome" => "Bruno", "nota" => 4],
    ["nome" => "Carlos", "nota" => 7]
];

$soma = 0;
$maiorNota = 0;
$melhorAluno = "";

foreach ($alunos as $aluno) {
    $soma += $aluno["nota"];

    if ($aluno["nota"] > $maiorNota) {
        $maiorNota = $aluno["nota"];
        $melhorAluno = $aluno["nome"];
    }
}

$media = $soma / count($alunos);

echo "Média da turma: $media <br>";
echo "Maior nota: $maiorNota <br>";
echo "Melhor aluno: $melhorAluno <br>";
?>
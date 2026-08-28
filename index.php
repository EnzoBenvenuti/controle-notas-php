<?php

// Função para calcular a média
function calcularMedia($notas) {
    $soma = 0;

    foreach ($notas as $nota) {
        $soma += $nota;
    }

    return $soma / count($notas);
}

// Função para verificar se o aluno foi aprovado
function verificarSituacao($media) {
    if ($media >= 6) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

// Lista de alunos e suas notas
$alunos = [
    "João" => [7, 8, 6],
    "Pedro" => [5, 6, 4],
    "Lucas" => [9, 8, 10],
    "Gabriel" => [6, 7, 5]
];

echo "<h1>Controle de Notas</h1>";

// Estrutura foreach para percorrer os alunos
foreach ($alunos as $nome => $notas) {

    $media = calcularMedia($notas);
    $situacao = verificarSituacao($media);

    echo "<h3>$nome</h3>";
    echo "Notas: ";

    // Outro foreach para mostrar as notas
    foreach ($notas as $nota) {
        echo "$nota ";
    }

    echo "<br>Média: " . number_format($media, 1);
    echo "<br>Situação: $situacao";
    echo "<hr>";
}

// Estrutura FOR
echo "<h2>Exemplo de repetição com FOR</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo "Essa é a repetição número $i.<br>";
}

?>

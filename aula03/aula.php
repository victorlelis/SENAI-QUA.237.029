<?php

/* comandos de saída */
echo "Olá, mundo!";
echo "<br>";

print "Olá, mundo!";
echo "<br>";

var_dump("Olá, mundo!");
echo "<br>";

/* comentários */
// comentário de uma linha

/**
 * comentário de 
 * multiplas linhas
 */

/* variáveis e constantes  */
$nome = "Victor Lelis";
$idade = 26;
$nome2 = "Manuela Lelis";
$idade2 = 3;

// $nome = $nome2;

echo $nome;
echo "<br>";

/* comando if */
if ($nome == $nome2) {
  echo "nomes iguais";
  echo "<br>";
} else {
  echo "nomes diferentes";
  echo "<br>";
}

$nota1 = 3;
$nota2 = 7;
$nota3 = 2;

$media = round(($nota1 + $nota2 + $nota3) / 3, 2);

if ($media < 4) {
  echo "aluno reprovado com média " . $media;
} else if ($media >= 4 && $media < 6) {
  echo "aluno em recuperação com média $media";
} else {
  echo "aluno aprovado com média {$media}";
}

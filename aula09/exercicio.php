<?php

/**
 * Exercício 1
 */
$num = 0;
echo "Exercício 1: \n";

if ($num >= 1) {
  echo "Valor positivo \n";
} elseif ($num == 0) {
  echo "Igual a zero \n";
} else {
  echo "Valor negativo \n";
}

/**
 * Exercício 2
 */
$tabuada = 5;
echo "Exercício 2: \n";

for ($i = 1; $i <= 10; $i++) {
  echo "{$i}x{$tabuada} = " . ($i * $tabuada) . "\n";
}

/**
 * Exercício 3
 */
echo "Exercício 3: \n";
$num = 7;

echo !($num % 2) ? "par \n" : "ímpar \n";

/**
 * Exercício 4
 */
$mes = 3;
echo "Exercício 4: \n";

switch ($mes) {
  case 1:
    echo "Janeiro \n";
    break;
  case 2:
    echo "Fevereiro \n";
    break;
  case 3:
    echo "Março \n";
    break;
  case 4:
    echo "Abril \n";
    break;
  case 5:
    echo "Maio \n";
    break;
  case 6:
    echo "Junho \n";
    break;
  case 7:
    echo "Julho \n";
    break;
  case 8:
    echo "Agosto \n";
    break;
  case 9:
    echo "Setembro \n";
    break;
  case 10:
    echo "Outubro \n";
    break;
  case 11:
    echo "Novembro \n";
    break;
  case 12:
    echo "Dezembro \n";
    break;
  default:
    echo "mês inválido \n";
    break;
}

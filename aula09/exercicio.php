<h3>Exerício</h3>
<p>
  Crie os algoritmos abaixo e depois poste os arquivos php na atividade.
  A atividade conta como presença na aula de hoje.
</p>
<p>
  1 - Crie um algoritmo que guarde em uma variável um valor e verifique se esse valor é positivo, negativo ou igual a zero. Mostre na tela se o valor informado é "Valor positivo", "Valor Negativo" ou "Igual a zero".
</p>
<p>
  2 - Crie um algoritmo que leia um valor de uma variável e exiba a tabuada de 0 a 10 de acordo com o numero informado na variável. Exemplo $variavel = 5 Saída 5 x 0 = 0 ; 5 x 1 = 5 ; 5 x 2 = 10......
</p>
<p>
  3 - Crie um algoritmo que leia o valor de uma variável e informe se o número é par ou ímpar.
</p>
<p>
  4 - Crie um algoritmo que armazene na variável um número inteiro de 1 a 12 e escreva o mês correspondente. Caso o número seja fora desse intervalo, informe que não existe um mês que corresponda ao valor informado.
</p>

<?php

/**
 * Exercício 1
 */
$num = 0;
echo "Exercício 1: <br>";

if ($num >= 1) {
  echo "Valor positivo <br>";
} elseif ($num == 0) {
  echo "Igual a zero <br>";
} else {
  echo "Valor negativo <br>";
}

/**
 * Exercício 2
 */
$tabuada = 5;
echo "Exercício 2: <br>";

for ($i = 1; $i <= 10; $i++) {
  echo "{$i}x{$tabuada} = " . ($i * $tabuada) . "<br>";
}

/**
 * Exercício 3
 */
echo "Exercício 3: <br>";
$num = 7;

echo !($num % 2) ? "par <br>" : "ímpar <br>";

/**
 * Exercício 4
 */
$mes = 3;
echo "Exercício 4: <br>";

switch ($mes) {
  case 1:
    echo "Janeiro <br>";
    break;
  case 2:
    echo "Fevereiro <br>";
    break;
  case 3:
    echo "Março <br>";
    break;
  case 4:
    echo "Abril <br>";
    break;
  case 5:
    echo "Maio <br>";
    break;
  case 6:
    echo "Junho <br>";
    break;
  case 7:
    echo "Julho <br>";
    break;
  case 8:
    echo "Agosto <br>";
    break;
  case 9:
    echo "Setembro <br>";
    break;
  case 10:
    echo "Outubro <br>";
    break;
  case 11:
    echo "Novembro <br>";
    break;
  case 12:
    echo "Dezembro <br>";
    break;
  default:
    echo "mês inválido <br>";
    break;
}

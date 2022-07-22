<?php

$num1 = 2;
$num2 = 4;
$num3 = 5;
$num4 = 2;
$resultado;

/**
 * adição
 */
$resultado = $num1 + $num2;
echo "adição: " . $resultado . "\n";

/**
 * subtração
 */
$resultado = $num2 - $num1;
echo "subtração: " . $resultado . "\n";

/**
 * multiplicação
 */
$resultado = $num1 * $num2;
echo "multiplicação: " . $resultado . "\n";

/**
 * divisão
 */
$resultado = $num2 / $num1;
echo "divisão: " . $resultado . "\n";

/**
 * resto da divisão
 */
$resultado = $num3 % $num1;
echo "resto: " . $resultado . "\n";

/**
 * incremento
 */
$incremento = $num1;
$incrementoe++;
echo "incremento: " . $incremento . "\n";

/**
 * decremento
 */
$decremento = $num1;
$decremento--;
echo "decremento: " . $decremento . "\n";

/**
 * igual
 */
if ($num1 == $incremento) {
  echo "os números são iguals \n";
} else {
  echo "os números são diferentes \n";
}

/**
 * diferente
 */
if ($num1 != $num2) {
  echo "os número são diferentes \n";
} else {
  echo "os números são iguais \n";
}

/**
 * maior que
 */
if ($num2 > $num1) {
  echo "é maior \n";
} else {
  echo "é menor \n";
}

/**
 * maior ou igual
 */
if ($num2 >= $num4) {
  echo "é maior ou igual \n";
} else {
  echo "é menor \n";
}

/**
 * menor que
 */
if ($num2 < $num1) {
  echo "é menor \n";
} else {
  echo "é maior \n";
}

/**
 * menor ou igual
 */
if ($num2 <= $num4) {
  echo "é menor ou igual \n";
} else {
  echo "é maior \n";
}

/**
 * operadores && e and (e)
 */
if (($num2 > $num1) && ($num3 > $num4)) {
  echo "as condições são verdadeira \n";
} else {
  echo "uma das condições são falsa \n";
}

/**
 * operadores || e or (ou)
 */
if (($num2 > $num1) || ($num3 < $num4)) {
  echo "uma das condições são verdadeira \n";
} else {
  echo "as condições são falsas \n";
}

/**
 * operador ! (negação)
 */
if (!($num2 > $num1) || ($num3 < $num4)) {
  echo "uma das condições são verdadeira \n";
} else {
  echo "as condições são falsas \n";
}

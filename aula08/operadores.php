<h3>Operadores</h3>
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
echo "adição: " . $resultado . "<br>";

/**
 * subtração
 */
$resultado = $num2 - $num1;
echo "subtração: " . $resultado . "<br>";

/**
 * multiplicação
 */
$resultado = $num1 * $num2;
echo "multiplicação: " . $resultado . "<br>";

/**
 * divisão
 */
$resultado = $num2 / $num1;
echo "divisão: " . $resultado . "<br>";

/**
 * resto da divisão
 */
$resultado = $num3 % $num1;
echo "resto: " . $resultado . "<br>";

/**
 * incremento
 */
$incremento = $num1;
$incrementoe++;
echo "incremento: " . $incremento . "<br>";

/**
 * decremento
 */
$decremento = $num1;
$decremento--;
echo "decremento: " . $decremento . "<br>";

/**
 * igual
 */
if ($num1 == $incremento) {
  echo "os números são iguals <br>";
} else {
  echo "os números são diferentes <br>";
}

/**
 * diferente
 */
if ($num1 != $num2) {
  echo "os número são diferentes <br>";
} else {
  echo "os números são iguais <br>";
}

/**
 * maior que
 */
if ($num2 > $num1) {
  echo "é maior <br>";
} else {
  echo "é menor <br>";
}

/**
 * maior ou igual
 */
if ($num2 >= $num4) {
  echo "é maior ou igual <br>";
} else {
  echo "é menor <br>";
}

/**
 * menor que
 */
if ($num2 < $num1) {
  echo "é menor <br>";
} else {
  echo "é maior <br>";
}

/**
 * menor ou igual
 */
if ($num2 <= $num4) {
  echo "é menor ou igual <br>";
} else {
  echo "é maior <br>";
}

/**
 * operadores && e and (e)
 */
if (($num2 > $num1) && ($num3 > $num4)) {
  echo "as condições são verdadeira <br>";
} else {
  echo "uma das condições são falsa <br>";
}

/**
 * operadores || e or (ou)
 */
if (($num2 > $num1) || ($num3 < $num4)) {
  echo "uma das condições são verdadeira <br>";
} else {
  echo "as condições são falsas <br>";
}

/**
 * operador ! (negação)
 */
if (!($num2 > $num1) || ($num3 < $num4)) {
  echo "uma das condições são verdadeira <br>";
} else {
  echo "as condições são falsas <br>";
}

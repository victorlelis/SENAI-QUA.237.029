<?php

/** constant */
const valor = 10;
define('VALOR', 10);

echo valor . "\n";
echo VALOR . "\n";

/** isset */
$valor = 10;

if (isset($valor)) {
  echo "valor alocado \n";
} else {
  echo "valor nulo \n";
}

/** unset */
unset($valor);

if (isset($valor)) {
  echo "valor alocado \n";
} else {
  echo "valor nulo \n";
}

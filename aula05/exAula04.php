<?php

/**
 * Correção exercício aula 04
 */

$multa = 4;
$valorLimite = 50;
$pesoTotal = 55;

if ($pesoTotal <= $valorLimite) {
  echo "Peso: $pesoTotal <br> não excedeu o valor limite $valorLimite kg";
} else {
  $pesoExcedido = $pesoTotal - $valorLimite;
  $valorMulta = $pesoExcedido * $multa;
  echo "Peso: " . $pesoTotal . "<br>" . " O peso excedito foi de: " . $pesoExcedido . "kg <br>" . " O valor da multa foi de: R$ " . number_format($valorMulta, 2, ",");
}

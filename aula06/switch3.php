<?php

/**
 * usabilidade switch
 */

$mes = 28;

switch ($mes) {
  case 1:
  case 3:
  case 5:
  case 7:
  case 8:
  case 10:
  case 12:
    echo "{$mes} - 31 Dias";
    break;
  case 4:
  case 6:
  case 9:
  case 11:
    echo "{$mes} - 30 dias";
    break;
  case 28:
    echo "{$mes} - 28 dias";
    break;
  default:
    echo "Mês inválido";
}

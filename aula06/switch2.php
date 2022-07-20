<?php

/**
 * usabilidade switch
 */

$conceito = "A";
switch ($conceito) {
  case 'A':
    echo "{$conceito} - Excelente";
    break;
  case 'B':
    echo "{$conceito} - Ótimo";
    break;
  case 'C':
    echo "{$conceito} - Bom";
    break;
  case 'D':
    echo "{$conceito} - Regular";
    break;
  case 'E':
    echo "{$conceito} - Ruim";
    break;
  default:
    echo "Conceito inválido";
}

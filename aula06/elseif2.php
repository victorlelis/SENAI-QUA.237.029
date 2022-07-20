<?php

/**
 * usabilidade else if
 */

$conceito = "A";

if ($conceito == "A") {
  echo "{$conceito} - Excelente";
} else if ($conceito == "B") {
  echo "{$conceito} - Ótimo";
} else if ($conceito == "C") {
  echo "{$conceito} - Bom";
} else if ($conceito == "D") {
  echo "{$conceito} - Regular";
} else if ($conceito == "E") {
  echo "{$conceito} - Ruim";
} else {
  echo "Conceito inválido";
}

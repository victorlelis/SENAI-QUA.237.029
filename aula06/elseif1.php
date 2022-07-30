<h3>Elseif 1</h3>
<?php

/**
 * usabilidade else if
 */

$codigo = 1;

if ($codigo == 1) {
  echo "{$codigo} - Alimento não-perecível";
} else if ($codigo == 2) {
  echo "{$codigo} - Alimento perecível";
} else if ($codigo == 3) {
  echo "{$codigo} - Vestuário";
} else if ($codigo == 4) {
  echo "{$codigo} - Limpeza";
} else if ($codigo == 5) {
  echo "{$codigo} - Celulares";
} else if ($codigo == 6) {
  echo "{$codigo} - Informática";
} else if ($codigo == 7) {
  echo "{$codigo} - Móveis";
} else if ($codigo == 8) {
  echo "{$codigo} - Outros";
} else {
  echo "Código inválido";
}

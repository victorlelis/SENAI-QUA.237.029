<?php

/**
 * dowhile usabilidade
 */

$contador = 1;
do {
  echo $contador . "\n";
  $contador++;
} while ($contador <= 10);

/**
 * dowhile tabuada
 */

$contador = 1;
do {
  echo "2 x " . $contador . " = " . $contador * 2 . "\n";
  $contador++;
} while ($contador <= 10);

/**
 * dowhile exercicio
 */

$contador = 10;
do {
  echo $contador . "\n";
  $contador--;
} while ($contador >= 1);

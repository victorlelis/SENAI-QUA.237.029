<?php

/**
 * Aluno: Victor Hugo Furtado Lelis
 */

$nome = "Paulo";
$limite = 50;
$multa = 4;

$peso = 55;
$excesso = $peso - $limite;
$pagar = $multa * $excesso;

if ($excesso > 0) {
  echo "{$nome} deverá pagar multa de R$ {$pagar}, pois excedeu {$excesso}kg do permitido de {$limite}kg.";
} elseif ($excesso == 0) {
  echo "{$nome} trouxe o limite permitido de {$limite}kg e não deverá pagar multa.";
} else {
  echo "{$nome} trouxe {$peso}kg e não deverá pagar multa, pois não excedeu o limite de {$limite}kg. <br> Podendo ainda trazer " . abs($excesso) . "kg";
}

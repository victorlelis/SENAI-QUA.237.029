<h3>Atividade</h3>
<p>
  Paulo comprou um microcomputador para controlar o rendimento diário de seu trabalho. Toda vez que ele traz um peso de peixes maior que o estabelecido pelo regulamento de pesca do estado de São Paulo (50 quilos) deve pagar uma multa de R$ 4,00 por quilo excedente. Paulo precisa que você faça um script que leia a variável (peso de peixes) e calcule o excesso. Gravar na variável a quantidade de quilos além do limite e na variável o valor da multa que Paulo deverá pagar. Imprima os dados do script com as mensagens adequadas.
</p>
<p>
  Orientações:
  Salve o arquivo com a extensão .php
  Faça o upload do arquivo aqui dentro da atividade.
  Coloque o seu nome completo como um comentário dentro do código php.
  Essa atividade conta como presença na aula de hoje
</p>

<hr>

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

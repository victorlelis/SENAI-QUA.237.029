<h3>Exercício 1</h3>
<?php

$mes = $_POST['mes'];

switch ($mes) {
  case 1:
  case 3:
  case 5:
  case 7:
  case 8:
  case 10:
  case 12:
    echo "Mês {$mes} possui 31 Dias";
    break;
  case 4:
  case 6:
  case 9:
  case 11:
    echo "Mês {$mes} possui 30 dias";
    break;
  case 2:
    echo "Mês {$mes} possui 28 dias";
    break;
  default:
    echo "Mês inválido";
}

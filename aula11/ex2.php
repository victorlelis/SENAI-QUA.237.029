<h3>Exercício 2</h3>
<?php

$multa = $_POST['multa'];
$valorLimite = $_POST['limite'];
$pesoTotal = $_POST['peso'];

if ($pesoTotal <= $valorLimite) {
  echo "Peso: $pesoTotal <br> não excedeu o valor limite $valorLimite kg";
} else {
  $pesoExcedido = $pesoTotal - $valorLimite;
  $valorMulta = $pesoExcedido * $multa;
  echo "Peso: " . $pesoTotal . "<br>" . " O peso excedito foi de: " . $pesoExcedido . "kg <br>" . " O valor da multa foi de: R$ " . number_format($valorMulta, 2, ",");
}

<?php
$arquivo = file("aulas.txt");
$aulas = [];
foreach ($arquivo as $aula) {
  $aula = explode("|", $aula);
  $aula = array_map('trim', $aula);
  $aulas[] = $aula;
}
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Curso Desenvolvedor Back-end PHP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container">
    <h1 class="h3 py-5">Curso Desenvolvedor Back-end PHP | SENAI DF</h1>
    <div class="row">
      <?php foreach ($aulas as $aula) : ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
          <div class="card border-0 bg-dark text-white text-center position-relative" style="min-height:200px;">
            <div class="card-body">
              <div>
                <p class="mb-0"><?= strtoupper($aula[0]); ?></p>
                <p class="small"><?= strtoupper($aula[2]); ?></p>
              </div>
              <div>
                <p>
                  <?= $aula[1]; ?>
                </p>
              </div>
              <div class="position-absolute w-100" style="bottom: 10px; left: 0;">
                <a class="btn btn-secondary text-decoration-none" href="./<?= $aula[0]; ?>">
                  acessar aula
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>
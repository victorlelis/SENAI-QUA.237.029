<?php
$arquivo = file("aulas.txt");
$aulas = [];
$getAula = $_GET['aula'];
$getArquivo = $_GET['arquivo'];

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
      <div class="col-12">
        <div class="mb-3">
          <a class="btn btn-secondary" href="index.php">ínicio</a>
          <?php if ($getAula && $getArquivo) : ?>
            <a class="btn btn-secondary" href="?aula=<?= $getAula; ?>"><?= $getAula; ?></a>
          <?php endif; ?>
        </div>
      </div>
      <?php if ($getAula && !$getArquivo) : ?>
        <div class="col-12">
          <?php
          $path = $getAula . "/";
          $diretorio = dir($path);

          ?>
          <h2 class="h5 mb-3">Arquivos: </h2>
          <?php
          while ($arquivo = $diretorio->read()) {
            if ($arquivo != "." && $arquivo != ".." && !str_contains($arquivo, ".png")  && !str_contains($arquivo, ".jpg")) {
          ?>
              <a class="link-primary text-decoration-none mb-3" href='?aula=<?= $getAula; ?>&arquivo=<?= $arquivo; ?>'><?= $arquivo; ?></a><br />
          <?php
            }
          }
          $diretorio->close();
          ?>
        </div>
      <?php elseif ($getAula && $getArquivo) : ?>

        <div class="col-12">
          <?php
          include "$getAula/$getArquivo";
          ?>
        </div>

      <?php else : ?>
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
                  <a class="btn btn-secondary text-decoration-none" href="?aula=<?= $aula[0]; ?>">
                    acessar aula
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

  <title>Bootstrap</title>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <h1 class="my-3">Formulário com Bootstrap</h1>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label for="idade">Idade:</label>
            <input type="number" name="idade" id="idade" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-success w-100">Salvar</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
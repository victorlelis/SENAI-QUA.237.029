<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dados</title>
</head>

<body>
  <?php
  $nome = $_POST["nome"];
  $idade = $_POST["idade"];
  $email = $_POST["email"];
  $sexo = $_POST["sexo"];

  var_dump($_POST);
  ?>
  <form>
    <label for="nome">Nome:</label>
    <br>
    <input type="text" id="nome" name="nome" value="<?= $nome; ?>">
    <br>
    <br>
    <label for="idade">Idade:</label>
    <br>
    <input type="number" name="idade" id="idade" value="<?= $idade; ?>">
    <br>
    <label>Sexo:</label>
    <br>
    <input type="radio" name="sexo" id="masculino" <?php if (isset($sexo) && $sexo == '1') echo "checked"; ?>>
    <label for="masculino">Masculino</label>
    <input type="radio" name="sexo" id="feminino" <?php if (isset($sexo) && $sexo == '2') echo "checked"; ?>>
    <label for="feminino">Feminino</label>
    <br>
    <br>
    <label>Curso:</label>
    <br>
    <input type="checkbox" name="curso[]" id="logica" value="logica">
    <label for="logica">Lógica de Programação</label>
    <input type="checkbox" name="curso[]" id="html" value="html">
    <label for="html">HTML & CSS</label>
    <input type="checkbox" name="curso[]" id="php" value="php">
    <label for="php">PHP & MYSQL</label>
    <br>
    <br>
    <label for="email">E-mail:</label>
    <br>
    <input type="email" name="email" id="email" value="<?= $email; ?>">
    <br>
    <br>
  </form>
</body>

</html>
<h3>Formulário</h3>
<form method="post" action="?aula=aula10&arquivo=recebe.php">
  <label for="nome">Nome:</label>
  <br>
  <input type="text" placeholder="Nome" id="nome" name="nome">
  <br>
  <br>
  <label for="idade">Idade:</label>
  <br>
  <input type="number" placeholder="Idade" name="idade" id="idade">
  <br>
  <br>
  <label>Sexo:</label>
  <br>
  <input type="radio" name="sexo" id="masculino" value="Masculino">
  <label for="masculino">Masculino</label>
  <input type="radio" name="sexo" id="feminino" value="Feminino">
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
  <input type="email" placeholder="E-mail" name="email" id="email">
  <br>
  <br>
  <label for="senha">Senha:</label>
  <br>
  <input type="password" placeholder="Senha" name="senha" id="senha">
  <br>
  <br>
  <input type="submit" value="Enviar">
</form>
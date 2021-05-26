<?php

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = $id";
$pdo = new PDO("sqlite:F:\workspace\isud-php+sqlite3\database\database.sqlite3");
$pdo->query($sql);

$prepare = $pdo->query($sql);

foreach ($prepare as $row){

?>
<link rel="stylesheet" href="\css\style.css">

<body>
<main style="text-align: center;" class="form-signin">
  <form action="?funcao=atualizar" method="POST">
    <input type="hidden" class="form-control" name="id" placeholder="Input field" value="<?php echo $row['id']?>">
    <img class="mb-4" src="\img\m-logo.png" alt="" width="72" height="57">
    <h1 style="text-align: center;" class="h3 mb-3 fw-normal">Alterar dados</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="nome" id="floatingInput" placeholder="Name" value="<?php echo $row['nome']?>" required>
      <label for="floatingInput">Nome</label>
      <?php 
          sendNome();
         ?>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="senha" id="floatingPassword" placeholder="Password" value="<?php echo $row['senha']?>" required>
      <label for="floatingPassword">Senha</label>
      <?php 
          sendSenha();
         ?>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit" onclick="alertUpdate();">Alterar</button>
  </form>
</main>
</body>
</html>

<?php
}
?>
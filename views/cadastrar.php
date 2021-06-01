<link rel="stylesheet" href="\css\style.css">

<div class="flex-body">
  <main class="form-signin container">
    <div style="text-align: justify;">
      <div class="h-100 p-3 text-white btn-danger rounded-3">
        <p>Nome: Ter mais de 2 letras.</p>
        <p>Senha: 8 caracteres, 2 letras, 2 números e 2 caracteres especiais. </p>
      </div>
    </div>
    <form style="padding-top: 20px;" action="?funcao=inserir" method="POST" role="form">
      <div style="text-align: center;"><img class="mb-4" src="img/m-logo.png" alt="" width="72" height="57"></div>
      <h1 style="text-align: center;" class="h3 mb-3 fw-normal">Cadastre-se</h1>

      <div class="form-floating">
        <input type="text" class="form-control" name="nome" id="floatingInput" placeholder="Name" required>
        <label for="floatingInput">Nome</label>
        <?php 
          sendNome();
         ?>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="senha" id="floatingPassword" placeholder="Password" required>
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
      <button class="w-100 btn btn-lg btn-warning" type="submit"onclick="alertInsert();">Cadastrar</button>
    </form>
  </main>
</div>
</body>
</html>
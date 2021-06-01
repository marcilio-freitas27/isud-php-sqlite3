<?php

include "database/Mydb.php";

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = $id";
$pdo = new Mydb;
$prepare = $pdo->__construct()->query($sql);

foreach ($prepare as $row){

?>
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="img/m-logo.png" alt="" width="72" height="57">
      <h2>Dados de Usuário</h2>
    </div>

    <div class="row">
      <div class="">
        <h4 class="mb-3">Dados Pessoais</h4>

        <hr class="my-4">

        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome</label>
              <label type="text" class="form-control" placeholder="Nome" value="" required><?php echo $row['nome']?></label>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-6">
              <label for="username" class="form-label">Telefone</label>
              <div class="input-group has-validation">
                <label type="text" class="form-control" placeholder="Telefone" value="" required><?php echo $row['telefone']?></label>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-6">
              <label for="email" class="form-label">Email</label>
              <label type="email" class="form-control" id="email" placeholder="you@example.com" value=""><?php echo $row['email']?></label>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-6">
              <label for="address" class="form-label">Endereço</label>
              <label type="text" class="form-control" id="address" placeholder="1234 Main St" value="" required><?php echo $row['endereco']?></label>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">País</label>
              <label type="text" class="form-control" id="country" value="" required><?php echo $row['pais']?></label>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Estado</label>
              <label type="text" class="form-control" id="state" value="" required><?php echo $row['estado']?></label>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Cep</label>
              <label type="text" class="form-control" id="zip" placeholder="" value="" required><?php echo $row['cep']?></label>
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>
          
          <hr class="my-4">

        </form>
      </div>
    </div>
  </main>
</div>  
<?php

}

?>
<?php include '../includes/header.php';  ?>
      <div class="row">
        <div class="col-md-12">
          <h1>Inserir cliente</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <form action="../controller/Clientes.controller.php?a=ins" method="post">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
            </div>
            <div class="form-group">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" required>
            </div>
            <div class="form-group">
              <label for="rg">RG</label>
              <input type="text" class="form-control" name="rg" id="rg" placeholder="RG" required>
            </div>
            <div class="form-group">
              <label for="dataNasc">Data de Nascimento</label>
              <input type="date" class="form-control" name="dataNasc" id="dataNasc" placeholder="Data de nascimento" required>
            </div>
            <div class="form-group">
              <label for="tel1">Telefone Principal</label>
              <input type="text" class="form-control" name="tel1" id="tel1" placeholder="Telefone principal" required>
            </div>
            <div class="form-group">
              <label for="tel2">Outro Telefone</label>
              <input type="text" class="form-control" name="tel2" id="tel2" placeholder="Outro telefone">
            </div>

            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
            </div>

            <button type="submit" class="btn btn-default">Inserir</button>
          </form>
        </div>
      </div>
<?php include '../includes/footer.php';  ?>

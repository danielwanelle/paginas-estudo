<?php 
    require_once 'classes/Produto.php';
    require_once 'classes/Erro.php';
?>
<?php
    try {
        $produto = new Produto();
        $lista = $produto->listar();
    } catch (Exception $e) {
        Erro::trataErro($e);
    }
?>
<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Produtos</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="produtos-criar.php" class="btn btn-info btn-block">Crair Novo Produto</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Categoria</th>
                <th class="acao">Editar</th>
                <th class="acao">Excluir</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $linha): ?>
                    <tr>
                        <td><?= $linha[0] ?></td>
                        <td><?= $linha[1] ?></td>
                        <td>R$<?= $linha[2] ?></td>
                        <td><?= $linha[3] ?></td>
                        <td><?= $linha[5] ?></td>
                        <td><a href="/produtos-editar.php" class="btn btn-info">Editar</a></td>
                        <td><a href="#" class="btn btn-danger">Excluir</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'rodape.php' ?>

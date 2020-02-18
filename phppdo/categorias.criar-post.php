<?php

    require_once 'classes/Categoria.php';
    require_once 'classes/Erro.php';

    try {
        $categoria = new Categoria(0, $_POST['nome']);
        $categoria->inserir();
    
        header('Location: categorias.php');
    } catch (Exception $e) {
        Erro::trataErro($e);
    }

?>
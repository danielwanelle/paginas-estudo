<?php

    require_once 'classes/Categoria.php';
    require_once 'classes/Erro.php';

    try {
        $categoria = new Categoria($_POST['id'], $_POST['nome']);
        $categoria->atualizar();
    
        header('Location: categorias.php');
    } catch (Exception $e) {
        Erro::trataErro($e);
    }    

?>
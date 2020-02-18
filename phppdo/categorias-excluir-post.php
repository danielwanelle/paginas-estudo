<?php

    require_once 'classes/Categoria.php';
    require_once 'classes/Erro.php';


    try {
        $categoria = new Categoria($_GET['id'], NULL);
        $categoria->excluir();
    
        header('Location: categorias.php');
    } catch (Exception $e) {
        Erro::trataErro($e);
    }

?>
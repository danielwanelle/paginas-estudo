<?php

    require_once 'classes/Conexao.php';

    class Produto{

        private $id, $nome, $preco, $quantidade, $categoria_id;

        public function __construct($id, $nome, $preco, $quantidade, $categoria_id){
            $this->id = $id;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
            $this->categoria_id = $categoria_id;
        }

        public function listar(){
            $query = "SELECT p.id, p.nome, preco, quantidade, categoria_id, c.nome as categoria_nome
                      FROM  produtos p INNER JOIN categorias c  ON p.categoria_id = c.id";
            $conexao = Conexao::pegarConexao();
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        public function inserir(){
            $query = "INSERT INTO produtos (nome, preco, quantidade, categoria_id) VALUES ('". $this->nome."', '". $this->preco."', '". $this->quantidade."', '". $this->categoria_id."', )";
            $conexao = Conexao::pegarConexao();
            $conexao->exec($query);
        }

    }

?>
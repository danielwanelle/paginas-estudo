<?php

    require_once 'classes/Conexao.php';

    class Categoria{

        private $id, $nome;

        public function __construct($id = false, $nome = false){
            $this->id = $id;
            $this->nome = $nome;
        }

        public function __get($param){
            return $this->$param;
        }

        public static function listar(){
            $query = "SELECT id, nome FROM  categorias";
            $conexao = Conexao::pegarConexao();
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
        }
        
        public function carregar(){
            //throw new Exception('Erro ao carregar');
            $query = "SELECT id, nome FROM  categorias WHERE id = ". $this->id;
            $conexao = Conexao::pegarConexao();
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            foreach($lista as $linha):
                $this->nome = $linha['nome'];
            endforeach;
        }
        
        public function inserir(){
            $query = "INSERT INTO categorias (nome) VALUES ('". $this->nome."')";
            $conexao = Conexao::pegarConexao();
            $conexao->exec($query);
        }

        public function atualizar(){
            $query = "UPDATE categorias SET nome = '". $this->nome ."' WHERE id = ". $this->id;
            $conexao = Conexao::pegarConexao();
            $conexao->exec($query);
        }

        public function excluir(){
            $query = "DELETE FROM categorias WHERE id = ". $this->id;
            $conexao = Conexao::pegarConexao();
            $conexao->exec($query);
        }

    }

?>
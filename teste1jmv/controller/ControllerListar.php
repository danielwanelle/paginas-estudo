<?php
require_once("../model/banco.php");
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
        $row = $this->lista->getCliente();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['nome'] ."</th>";
            echo "<td>".$value['cpf'] ."</td>";
            echo "<td>".$value['rg'] ."</td>";
            echo "<td> R$:".$value['dataNasc'] ."</td>";
            echo "<td>".$value['tel1'] ."</td>";
            echo "<td>".$value['tel2'] ."</td>";
            echo "<td>".$value['email'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editar.php?id=".$value['idCliente']."'>Editar</a><a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$value['idCliente']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }
}

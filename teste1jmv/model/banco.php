<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setCliente($nome, $cpf, $rg, $datanasc, $tel1, $tel2, $email){
        $stmt = $this->mysqli->prepare("INSERT INTO cliente (`nome`, `cpf`, `rg`, `datanasc`, `tel1`, `tel2`, `email`) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss",$nome, $cpf, $rg, $datanasc, $tel1, $tel2, $email);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getCliente(){
        $result = $this->mysqli->query("SELECT * FROM cliente");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteCliente($id){
        if($this->mysqli->query("DELETE FROM `cliente` WHERE `idCliente` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaCliente($id){
        $result = $this->mysqli->query("SELECT * FROM cliente WHERE idCliente='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateCliente($nome, $cpf, $rg, $datanasc, $tel1, $tel2, $email){
        $stmt = $this->mysqli->prepare("UPDATE `cliente` SET `nome` = ?, `cpf`=?, `rg`=?, `datanasc`=?, `tel1`=?,`tel2` = ? `email` = ? WHERE `idCliente` = ?");
        $stmt->bind_param("sssssss",$nome, $cpf, $rg, $datanasc, $tel1, $tel2, $email);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>

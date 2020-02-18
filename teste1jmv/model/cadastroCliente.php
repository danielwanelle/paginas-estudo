<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $nome;
    private $cpf;
    private $rg;
    private $datanasc;
    private $tel1;
    private $tel2;
    private $email;

    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setCpf($string){
        $this->cpf = $string;
    }
    public function setRg($string){
        $this->rg = $string;
    }
    public function setDatanasc($string){
        $this->datanasc = $string;
    }
    public function setTel1($string){
        $this->tel1 = $string;
    }
    public function setTel2($string){
      $this->tel2 = $string;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getRg(){
        return $this->rg;
    }
    public function getDatanasc(){
        return $this->datanasc;
    }
    public function getTel1(){
        return $this->tel1;
    }
    public function getTel2(){
      return $this->tel2;
    }
    public function getEmail(){
        return $this->email;
    }


    public function incluir(){
        return $this->setCliente($this->getNome(),$this->getCpf(),$this->getRg(),$this->getDatanasc(),$this->getTel1(),$this->getTel2(),$this.getEmail());
    }
}
?>

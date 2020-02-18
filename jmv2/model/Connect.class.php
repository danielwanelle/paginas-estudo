<?php

  class Connect{
    private $servername;
    private $username;
    private $password;
    private $db_name;
    private $connect;

    public function __construct(){
      $this->servername = 'localhost';
      $this->username = 'root';
      $this->password = '';
      $this->db_name = 'contatos';

      $this->connect = new mysqli($this->servername, $this->username, $this->password, $this->db_name);
    }

    public function getConnect($sql){
      $resultado = $this->connect->query($sql);
      return $resultado->fetch_all();
    }

    public function setConnect($sql){
      $this->connect->query($sql);
    }

    public function closeConnect(){
      $this->connect->close();
    }
  }

?>

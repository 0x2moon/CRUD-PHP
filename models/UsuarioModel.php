<?php

require_once "Conexao.php";

class UsuarioModel {

    private $db;

    public $tabela="usuarios";

    function __construct(){

        $this->db = new Conexao();

    }

    public function Listar() {
        //string sql
         $sql = "Select * from $this->tabela";
         //execulta e retorna os dados
         return $this->db->executeSQL($sql);
    }
    public function add($nome,$email,$senha) {
        //string sql
         $sql = "insert into $this->tabela (nome,email,senha)
                 values ('$nome','$email','$senha')";
         //execulta e retorna os dados
         return $this->db->executeSQL($sql);
    }
    public function ListarPorId($id) {
        //string sql
         $sql = "Select * from $this->tabela  where id = $id";
         //execulta e retorna os dados
         return $this->db->executeSQL($sql);
    }
    public function edit($id, $nome,$email ) {
        //string sql
         $sql = "update $this->tabela set nome='$nome', 
                email='$email'  where id = $id";
         //execulta e retorna os dados
         return $this->db->executeSQL($sql);
    }

    public function del($id) {
        //string sql
         $sql = "Delete from $this->tabela  where id = $id";
         //execulta e retorna os dados
         return $this->db->executeSQL($sql);
    }


    public function login($email, $password) {
        //string sql
         $sql = "Select * from $this->tabela  where email = '$email'
                 and senha = '$password'";
         //execulta e retorna os dados
         return $this->db->executeSQL($sql);
    }

}

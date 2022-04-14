<?php

require_once "Conexao.php";

class ImovelModel {

    private $db;

    public $tabela="gmdsm_imoveis";

    function __construct(){

        $this->db = new Conexao();

    }

    public function Listar() {
        //string sql
         $sql = "Select * from $this->tabela";
         //execulta e retorna os dados
         return $this->db->executeSQL($sql);
    }
    public function add($tipo,$fins,$area,$estado,$cidade,$bairro,$rua) {
        //string sql
         $sql = "insert into $this->tabela (tipo,fins,area,estado,
         cidade,bairro,rua) values ('$tipo','$fins','$area','$estado',
         '$cidade','$bairro','$rua')";
         //execulta e retorna os dados
         return $this->db->executeSQL($sql);
    }
    public function ListarPorId($id) {
        //string sql
         $sql = "Select * from $this->tabela  where id = $id";
         //execulta e retorna os dados
         return $this->db->executeSQL($sql);
    }
    public function edit($id, $tipo,$fins,$area,$estado,$cidade,$bairro,$rua) {
        //string sql
         $sql = "update $this->tabela set tipo='$tipo', fins='$fins', area='$area',
         estado = '$estado', cidade = '$cidade', bairro = '$bairro',rua = '$rua'where id = $id";
         //execulta e retorna os dados
         return $this->db->executeSQL($sql);
    }

    public function del($id) {
        //string sql
         $sql = "Delete from $this->tabela  where id = $id";
         //execulta e retorna os dados
         return $this->db->executeSQL($sql);
    }

}

?>
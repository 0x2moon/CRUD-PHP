<?php
 include "../../helpers/config.php";
require "../../models/UsuarioModel.php";

$UsuarioModel = new UsuarioModel();
$id = $_GET['id'];

$UsuarioModel->del($id);

header("Location: ../../views/Usuarios");
//redireciona

?>
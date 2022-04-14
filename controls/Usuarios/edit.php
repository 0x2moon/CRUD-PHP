<?php
 include "../../helpers/config.php";
require "../../models/UsuarioModel.php";

$UsuarioModel = new UsuarioModel();
$id = $_POST['campoId'];
$nome = $_POST['campoNome'];
$email = $_POST['campoEmail'];
$UsuarioModel->edit($id,$nome,$email);

header("Location: ../../views/Usuarios");
//redireciona

?>
<?php
require "../../models/UsuarioModel.php";

$UsuarioModel = new UsuarioModel();

$nome = $_POST['campoNome'];
$email = $_POST['campoEmail'];
$senha = md5($_POST['campoSenha']);

$UsuarioModel->add($nome, $email, $senha);

header("Location: ../../views/Usuarios");
//redireciona

?>
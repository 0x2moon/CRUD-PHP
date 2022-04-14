<?php

include "../../helpers/config.php";

if (!isset($_GET['id'])) {
    header("location: index.php");
    exit();
}

$id =$_GET['id'];
require "../../models/UsuarioModel.php";


$UsuarioModel = new UsuarioModel();

$rs = $UsuarioModel->ListarPorId($id);

$obj = $rs->fetch_object();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../includes/head.php"; ?>

</head>

<body>
    <div class="container">
        <div class="row geral">
            <div class="col-md-3 ">
                <?php include "../includes/menu-lateral.php"; ?>
            </div>
            <div class="col-md-9">
                <h3>Editar Usuario</h3>
                <form method="POST" action="../../controls/Usuarios/edit.php">
                   <input type="hidden" name="campoId" value="<?php echo $obj->id;?>">
                    <div class="form-group">
                        <label for="idNome">Usuario:</label>
                        <input id="idNome" class="form-control" type="text" name="campoNome" 
                        required value="<?php echo $obj->nome; ?>">
                    </div>
                    <div class="form-group">
                        <label for="idEmail">E-mail:</label>
                        <input id="idEmail" class="form-control" type="email" name="campoEmail" required 
                        value="<?php echo $obj->email; ?>" >
                    </div>
                    <button class="btn btn-success" type="submit">Salvar</button>


                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>
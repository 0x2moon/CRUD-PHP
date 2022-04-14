<?php
include "../../helpers/config.php";
if (!isset($_GET['id'])) {
    header("location: index.php");
    exit();
}

$id = $_GET['id'];
require "../../models/ImovelModel.php";


$ImovelModel = new ImovelModel();

$rs = $ImovelModel->ListarPorId($id);

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
                <h3>Editar imóvel</h3>
                <form method="POST" action="../../controls/Imoveis/edit.php">
                <input type="hidden" name="campoId" value="<?php echo $obj->id;?>">
                    <div class="form-group">
                    <label for="idTipo">Tipo:</label>
                        <select class="custom-select" class="form-control" id="idTipo" name="campoTipo">
                            <option selected>Selecione:</option>
                            <option value="Casa">Casa</option>
                            <option value="Apartamento padrão">Apartamento padrão</option>
                            <option value="Kitnet">Kitnet</option>
                            <option value="Flats">Flats</option>
                            <option value="Coberturas padrão">Coberturas padrão</option>
                            <option value="Mansões">Mansões</option>
                            <option value="Casas de praia">Casas de praia</option>
                            <option value="Casas de campo">Casas de campo</option>
                            <option value="Lofts">Lofts</option>
                            <option value="Depósitos">Depósitos</option>
                            <option value="Sala comerciais">Sala comerciais</option>
                        </select>
                        <label for="idFins">Fim:</label>
                        <select class="custom-select mr-sm-2" id="idFins" name="campoFins">
                            <option selected>Selecione:</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Residencial">Residencial</option>
                        </select>

                        <div class="form-group">
                            <label for="idEmail">Área:</label>
                            <input id="idEmail" class="form-control" type="text" name="campoArea" required value="<?php echo $obj->area; ?>">
                        </div>

                        <div class="form-group">
                            <label for="idEstado">Estado:</label>
                            <input id="idEstado" class="form-control" type="text" name="campoEstado" required value="<?php echo $obj->estado; ?>">
                        </div>

                        <div class="form-group">
                            <label for="idCidade">Cidade:</label>
                            <input id="idCidade" class="form-control" type="text" name="campoCidade" required value="<?php echo $obj->cidade; ?>">
                        </div>

                        <div class="form-group">
                            <label for="idBairro">Bairro:</label>
                            <input id="idBairro" class="form-control" type="text" name="campoBairro" required value="<?php echo $obj->bairro; ?>">
                        </div>

                        <div class="form-group">
                            <label for="idRua">Rua:</label>
                            <input id="idRua" class="form-control" type="text" name="campoRua" required value="<?php echo $obj->rua; ?>">
                        </div>
                        <button class="btn btn-success" type="submit">Salvar</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>
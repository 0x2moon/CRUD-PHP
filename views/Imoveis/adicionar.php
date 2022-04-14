<?php
include "../../helpers/config.php";
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
                <h3>Cadastro de imóveis</h3>
                <form method="POST" action="../../controls/Imoveis/add.php">
                    <div class="form-group">
                        <label for="idTipo">Tipo:</label>
                        <select class="custom-select" class="form-control" id="idTipo" name="campoTipo" required>
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

                        <label for="idFins">Fins:</label>
                        <select class="custom-select" class="form-control" id="idFins" name="campoFins" required>
                            <option selected>Selecione:</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Residencial">Residencial</option>
                        </select>




                        <div class="form-group">
                            <label for="idArea">Área:</label>
                            <input id="idArea" class="form-control" type="text" name="campoArea" required>
                        </div>
                        <div class="form-group">
                            <label for="idEstado">Estado:</label>
                            <input id="idEstado" class="form-control" type="text" name="campoEstado" required>
                        </div>
                        <div class="form-group">
                            <label for="idCidade">Cidade:</label>
                            <input id="idCidade" class="form-control" type="text" name="campoCidade" required>
                        </div>
                        <div class="form-group">
                            <label for="idBairro">Bairro:</label>
                            <input id="idBairro" class="form-control" type="text" name="campoBairro" required>
                        </div>
                        <div class="form-group">
                            <label for="idRua">Rua:</label>
                            <input id="idRua" class="form-control" type="text" name="campoRua" required>
                        </div>
                        <button class="btn btn-success" type="submit">Salvar</button>


                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>
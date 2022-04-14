<?php

include "../../helpers/config.php";
//requisição da classe modelo
require "../../models/UsuarioModel.php";

$UsuarioModel = new UsuarioModel();

$rs = $UsuarioModel->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../includes/head.php" ?>

</head>

<body>
    <div class="container">
        <div class="row geral">
            <div class="col-md-3 ">
                <?php include "../includes/menu-lateral.php" ?>
            </div>
            <div class="col-md-9">
                <h3>Cadastro de usuários</h3>
                <table class="table">
                    <thead class="thead-dark">

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Usuários</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Ações</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php while ($obj = $rs->fetch_object()) {  ?>
                            <tr>
                                <th scope="row"><?php echo $obj->id; ?></th>
                                <td> <?php echo $obj->nome; ?></td>
                                <td> <?php echo $obj->email; ?></td>

                                <td>
                                    <a href="editar.php?id=<?php echo $obj->id; ?>" class="btn btn-warning btn-sm btn-">Editar</a>
                                    <a href="#" onclick="excluir(<?php echo $obj->id; ?>)" class="btn btn-danger btn-sm btn-">Excluir</a>

                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

                <a href="adicionar.php" class="btn btn-success">Adicionar</a>

            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
    <script>
        function excluir(id) {
            if (confirm("Deseja excluir?")) {
                window.location.href = "../../controls/Usuarios/del.php?id=" + id;
            }
        }
    </Script>
</body>

</html>
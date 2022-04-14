<?php
 include "../../helpers/config.php";
require "../../models/ImovelModel.php";

$ImovelModel = new ImovelModel();

$rs = $ImovelModel->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../includes/head.php" ?>

</head>

<body>
    <div class="container">
        <div class="row geral">
            <div class="col-md-12 ">
                <?php include "../includes/menu-lateral.php" ?>
            </div>
            <div class="col-md-12">
                <h3>Imoveis</h3>
                <table class="table">
                    <thead class="thead-dark">

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Para fim</th>
                            <th scope="col">Área</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Rua</th>
                            <th scope="col">Ações</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php while ($obj = $rs->fetch_object()) {  ?>
                            <tr>
                                <th scope="row"><?php echo $obj->id; ?></th>
                                <td> <?php echo $obj->tipo; ?></td>
                                <td> <?php echo $obj->fins; ?></td>
                                <td> <?php echo $obj->area; ?></td>
                                <td> <?php echo $obj->estado; ?></td>
                                <td> <?php echo $obj->cidade; ?></td>
                                <td> <?php echo $obj->bairro; ?></td>
                                <td> <?php echo $obj->rua; ?></td>
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
        function excluir(id){
            if (confirm("Deseja excluir?")) {
             window.location.href = "../../controls/Imoveis/del.php?id="  +id;   
            }
        }
    </Script>
</body>

</html>
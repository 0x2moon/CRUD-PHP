<?php
 include "../../helpers/config.php";
require "../../models/ImovelModel.php";

$ImovelModel = new ImovelModel();
$id = $_GET['id'];

$ImovelModel->del($id);

header("Location: ../../views/Imoveis");
//redireciona

?>
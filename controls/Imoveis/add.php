<?php
 include "../../helpers/config.php";
require "../../models/ImovelModel.php";

$ImovelModel = new ImovelModel();

//tipo selector
$campoTipo = $_POST['campoTipo'];
$tipo = $_POST['campoTipo'];
$fins =$_POST['campoFins'];



$area = $_POST['campoArea'];
$estado = $_POST['campoEstado'];
$cidade = $_POST['campoCidade'];
$bairro = $_POST['campoBairro'];
$rua = $_POST['campoRua'];


$ImovelModel->add( $tipo,
$fins,
$area,
$estado,
$cidade,
$bairro,
$rua);

header("Location: ../../views/Imoveis");
//redireciona

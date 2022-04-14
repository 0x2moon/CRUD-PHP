<?php

//primeiro comando quando for login é feito por sesseção
session_start();

if ( $_POST['campoEmail'] && $_POST['campoSenha']&&
 !empty($_POST['campoEmail']) &&  !empty($_POST['campoSenha'])) {
    
        require_once "../../models/UsuarioModel.php";

        $UsuarioModel = new UsuarioModel();

        $email = $_POST['campoEmail'];
        $password = md5( $_POST['campoSenha']);

        $rs = $UsuarioModel->login($email, $password);

        if(mysqli_num_rows($rs) == 1){
            //cria objeto de usuario
            $usuario = $rs->fetch_object();

            //gravar dados na secion

            require_once "../../helpers/Seguranca.php";
            //metados estaticos nao precisa estanciar pra usar.
            Seguranca::login($usuario->id,$usuario->nome,$usuario->email);
            
        }else {
           //redireciona para a pagina login
            header("location:../../views/Usuarios/login.php?erro=0");
            exit;
        }
       
} else{
    header("location:../../views/Usuarios/login.php?erro=1");
    exit;
}

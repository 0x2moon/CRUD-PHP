<?php

if (isset($_GET['erro'])) {
    $erro = $_GET['erro'];

    $cor = array('danger', 'danger', 'primary',);

    $msg = array(
        'Usuário ou senha inválidos. Tente novamente!',
        'Para acessar essa pagina faça login no sistema.',
        'Faça login no sistema.'
    );
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include "../includes/head.php"; ?>

</head>

<body>
    <div class="container">
        <div class="row geral">
            <div class="col-md-4 mx-auto">
                <?php if(isset($_GET['erro'])){?>
                <div class="alert alert-<?php echo $cor[$erro];?>" role="alert">
                <?php echo $msg[$erro];?>
                </div>
                <?php } ?>
                <h3 class="text-center">Administração</h3>
                <form method="POST" action="../../controls/Usuarios/login.php">
                    <div class="form-group">
                        <label for="idEmail">E-mail:</label>
                        <input id="idEmail" class="form-control" type="email" name="campoEmail" required placeholder="E-mail: ex: g@g.com">
                    </div>

                    <div class="form-group">
                        <label for="idSenha">Senha:</label>
                        <input id="idSenha" class="form-control" type="password" name="campoSenha" required minlength="5">
                    </div>
                    <button class="btn btn-success" type="submit">Entrar</button>
                   <a href="adicionar.php" > <button class="btn btn-warning" type="button"> Novo Usuário</button></a>


                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>
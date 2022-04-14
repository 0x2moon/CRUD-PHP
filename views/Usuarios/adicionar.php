
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
                <h3>Cadastro de Usuários</h3>
                <form method="POST" action="../../controls/Usuarios/add.php">
                    <div class="form-group">
                        <label for="idNome">Nome:</label>
                        <input id="idNome" class="form-control" type="text" name="campoNome" required placeholder="Nome: ex: Gabriela">
                    </div>

                    <div class="form-group">
                        <label for="idEmail">E-mail:</label>
                        <input id="idEmail" class="form-control" type="email" name="campoEmail" required placeholder="E-mail: ex: g@g.com">
                    </div>

                    <div class="form-group">
                        <label for="idSenha">Senha:</label>
                        <input id="idSenha" class="form-control" type="password" name="campoSenha" required minlength="5">
                    </div>
                    <button class="btn btn-success" type="submit">Salvar</button>


                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>
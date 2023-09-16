<!DOCTYPE html>
<html lang="en">

<!-- </head> -->

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a><b>Gest</b>SALC</a>
        </div>

        <!-- /.login-logo -->
        <div class="card">

            <div class="card card-outline card-navy cardBackground">

                <div class="card-body">
                    <!-- Formulário de login -->
                    <form method="post" class="needs-validation  needs-validation-login" novalidate>

                        <!-- Usuário do sistema -->
                        <div class="input-group mb-3">

                            <input class="form-control" type="text" placeholder="Usuário" name="loginUsuario" required>

                            <div class="input-group-append">

                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>

                            </div>
                            <div class="invalid-feedback">Preenhca o usuario</div>
                        </div>
                        <!-- /Usuário do sistema -->

                        <!-- Senha do sistema -->
                        <div class="input-group mb-3">
                            <input class="form-control" type="password" placeholder="Senha" name="loginSenha" required>

                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <div class="invalid-feedback">Preenhca a senha</div>
                        </div>
                        <!-- /Senha do sistema -->

                        <!-- Botão de login -->
                        <div class="row">

                            <?php
                            $login = new UsuarioController();
                            $login->login();
                            ?>

                            <div class="col-12 text-center">

                                <button type="submit" class="btn btn-info">Login</button>

                            </div>

                        </div>
                        <!-- /Botão de login -->

                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- /.login-box -->
</body>

</html>
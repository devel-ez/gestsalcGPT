<!DOCTYPE html>
<html lang="en">

<!-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title> -->

<!-- Google Font: Source Sans Pro -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
<!-- Font Awesome -->
<!-- <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css"> -->
<!-- icheck bootstrap -->
<!-- <link rel="stylesheet" href="../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
<!-- Theme style -->
<!-- <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css"> -->

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

    <!-- jQuery -->
    <!-- <script src="../../assets/plugins/jquery/jquery.min.js"> -->
    <!-- // </script> -->
    <!-- Bootstrap 4 -->
    <!-- <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- AdminLTE App -->
    <!-- <script src="../../assets/dist/js/adminlte.min.js"></script> -->
</body>

</html>
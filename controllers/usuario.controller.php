<?php

class UsuarioController
{

    /* -------------------------------------------------------------------------- */
    /*                              Login de usuários                             */
    /* -------------------------------------------------------------------------- */
    public function login()
    {
        if (isset($_POST['loginUsuario']) && isset($_POST['loginSenha'])) {



            $usuario = $_POST['loginUsuario'];
            $senha = crypt($_POST['loginSenha'], '$2a$07$azybxcags23425sdg23sdfhsd$');
            // $senha = $_POST['loginSenha'];

            $result = UsuarioModel::mdlIniciarSessao($usuario, $senha);
            echo '<script>console.log(' . json_encode($result) . ');</script>';

            if (count($result) > 0) {
                $_SESSION['usuario'] = $result[0];


                echo '
                <script>
                window.location = "http://localhost/gestsalcnew/";
                </script>
                ';
            } else {
                echo '
                <script>
                fncSweetAlert(
                        "error", 
                        "Usuário ou senha incorretos!", 
                        "http://localhost/gestsalcnew/");
                </script>
                ';
            }
        }
    }
}

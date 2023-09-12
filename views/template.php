<?php

session_start();

if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    session_destroy();

    echo '
        <script>
        window.location="http://localhost/gestsalcnew/"
        </script>';
}

?>



<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GestSALC</title>

    <link rel="shortcut icon" href="views/assets/dist/img/acanto.png" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="views/assets/plugins/google-fonts/google-fonts.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- jquery ui css -->
    <link rel="stylesheet" href="views/assets/plugins/jquery-ui/jquery-ui.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="views/assets/dist/css/adminlte.min.css">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="views/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Custom processos Css -->
    <link rel="stylesheet" href="views/pages/processos/custom_css.css">
    <!-- Custom login css -->
    <link rel="stylesheet" href="views/pages/login/custom.css">
    <!-- Custom modules css -->
    <link rel="stylesheet" href="views/modules/custom.css">


    <!--CSS PARA USO DO DATATABLES JS-->
    <link rel="stylesheet" href="views/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="views/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="views/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="views/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="views/assets/dist/js/adminlte.min.js"></script>
    <!-- Sweetalert2 -->
    <script src="views/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- My custom Js -->
    <script src="views/pages/processos/custom_js.js"></script>
    <script src="views/pages/processos/masked_input.js"></script>

    <!--BIBLIOTECAS PARA USO DE DATATABLES JS-->
    <script src="views/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="views/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="views/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="views/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="views/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="views/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="views/assets/plugins/jszip/jszip.min.js"></script>
    <script src="views/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="views/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="views/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="views/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="views/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


    <!-- Jquery UI js -->
    <script src="views/assets/plugins/jquery-ui/jquery-ui.js"></script>

    <!-- sweet alert personalizado -->
    <script src="views/assets/dist/js/template.js"></script>



</head>

<?php if (isset($_SESSION['usuario'])) : ?>

    <body class="hold-transition sidebar-mini">
        <!-- Wrapper -->
        <div class="wrapper">

            <?php
            include "modules/navbar.php";
            include "modules/sidebar.php";
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <?php include "views/pages/" . $_SESSION['usuario']->view ?>

            </div>
            <!-- /Content Wrapper -->
        </div>
        <!-- / Wrapper -->

        <script>
            function CarregarConteudo(pagina_php, conteudo, id_perfil, id_modulo) {
                $("." + conteudo).load(pagina_php);
            }
        </script>

    </body>

<?php else : ?>

    <body>
        <?php include "views/pages/login/login.php" ?>

    </body>
<?php endif; ?>

</html>
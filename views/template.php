<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GestSALC</title>

    <link rel="shortcut icon" href="views/assets/dist/img/acanto.png" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="views/assets/dist/css/adminlte.min.css">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="views/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- My custom Css -->
    <link rel="stylesheet" href="views/assets/dist/custom_css/custom_css.css">


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
    <script src="views/assets/dist/custom_js/masked_input.js"></script>
    <script src="views/assets/dist/custom_js/custom_js.js"></script>

    <!--BIBLIOTECAS PARA USO DE DATATABLES JS-->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <!-- <script src="views/assets/plugins/datatables/jquery.dataTables.min.js"></script> -->
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

</head>

<body class="hold-transition sidebar-mini">
    <!-- wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        <?php
        include 'modules/navbar.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include 'modules/sidebar.php';
        ?>
        <!-- /Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php
            include 'contents/processos.php';
            ?>

        </div>
        <!-- /.Content Wrapper. Contains page content  -->

        <!-- Main Footer -->
        <?php
        include 'modules/footer.php';
        ?>
        <!-- /Main Footer -->
    </div>
    <!-- ./wrapper -->

    <script>
        function loadContents(page_content_php, content_wrapper_template) {

            $("." + content_wrapper_template).load(page_content_php);
        };
    </script>
</body>

</html>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

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

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="views/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="views/assets/dist/js/adminlte.min.js"></script>
    </body>
</head>

<body class="hold-transition sidebar-mini">
    <!-- wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        <?php
        include 'models/navbar.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include 'models/sidebar.php';
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
        include 'models/footer.php';
        ?>
        <!-- /Main Footer -->
    </div>
    <!-- ./wrapper -->

    <script>
    function loadContents(page_content_php, content_wrapper_template){

        $("."+content_wrapper_template).load(page_content_php);
    };
    </script>
</body>

</html>
<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="views/assets/dist/img/caveira.png" alt="caveira Logo" style="opacity: .8; width: 56px; height: 70px;">
        <span class="brand-text font-weight-light" style="padding-left: 25px; font-weight:bold;">GestSALC</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="views/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">2ºSgt velêz</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a style="cursor:pointer;" class="nav-link menu-link" onclick="loadContents('views/contents/processos.php', 'content-wrapper')">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Processos
                        </p>
                    </a>
                </li>
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" style="cursor:pointer;" class="nav-link menu-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboards
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor:pointer;" href="#" class="nav-link " onclick="loadContents('views/contents/novos_processos.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Novos processos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor:pointer;" href="#" class="nav-link" onclick="loadContents('views/contents/novos_aditivos.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Novos aditivos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor:pointer;" href="#" class="nav-link" onclick="loadContents('views/contents/novos_apostilamentos.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Novos apostilamentos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor:pointer;" href="#" class="nav-link" onclick="loadContents('views/contents/execucao_pca.php', 'content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Execução PCA</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
    $(".menu-link").on('click', function() {
        $(".menu-link").not(this).removeClass('active');
        $(this).addClass('active');
    });
</script>
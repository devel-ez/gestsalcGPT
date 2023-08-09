<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Processos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Processos</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- Protocolo de entrada e saída -->
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-warning shadow">
                    <div class="card-header">
                        <h3 class="card-title">Protocolo</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">
                        conteúdo do cartão de protocolo que será implementado
                    </div>
                </div>
            </div>
        </div>
        <!-- /Protocolo de entrada e saída -->

        <div classs="row">
            <div class="col-lg-12">
                <table id="tbl_processos" class="table table-striped w-100 shadow">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Progresso</th>
                            <th>NUP</th>
                            <th>DFD</th>
                            <th>Processos Origem</th>
                            <th>Número do processo</th>
                            <th>Objeto</th>
                            <th>Requisitante</th>
                            <th>Analista</th>
                            <th>Situação</th>
                            <th>Fase Externa</th>
                            <th>Protocolo</th>
                            <th class="text-center">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<script>
    $(document).ready(
        // function() {
        //     $.ajax({
        //         url: "ajax/processos.ajax.php",
        //         method: 'POST',
        //         dataType: 'json',
        //         success: function(response) {
        //             console.log("reponse", response);
        //         }

        //     });
        // };

        function processos(){
            var table;
            table = $('#tbl_processos').DataTable({
                language:{
                    url: "views/assets/plugins/language/json/pt_br.json"
                }
                
            });

        }

    );
</script>
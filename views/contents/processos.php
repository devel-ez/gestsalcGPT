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
        <div class="row">
            <div class="col-lg-12">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline shadow" aria-describedby="example1_info">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Progresso</th>
                                <th>DFD</th>
                                <th>NUP</th>
                                <th>Processo Origem</th>
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
        </div>
        <!--  tabela "antiga" -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <table id="tbl_processos" class="table table-striped w-100 shadow">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Progresso</th>
                            <th>DFD</th>
                            <th>NUP</th>
                            <th>Processo Origem</th>
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
        </div> -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<!-- DataTable scripts específicos -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>


<!-- Ajax scripts -->
<script>
    $(document).ready(function() {

        $.ajax({
            url: "ajax/processos.ajax.php",
            method: 'POST',
            data: {
                'action': 1
            }, //1: Listar Processos
            dataType: 'json',
            success: function(response) {
                console.log("reponse", response);
            }

        });

        var table;
        table = $('#example1').DataTable({

            ajax: {
                url: "ajax/processos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'action': 1
                }, //1: 
            },

            responsive: {
                datails: {
                    type: 'column'
                }
            },

            columnDefs: [{
                    targets: 1,
                    orderable: false,
                    calssName: 'control'
                },
                {
                    targets: 12,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +
                            "<span class='btnEdit text-primary px-1' style='cursor: pointer;'>" +
                            "<i class='fas fa-edit'></i>" +
                            "</span>" +
                            "</center>"
                    }
                }
            ],

            language: {
                url: "views/assets/plugins/language/json/pt_br.json"
            }

        });

    });
</script>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">

    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- Protocolo de entrada e saída -->
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card card-dark shadow">
                    <div class="card-header">
                        <h3 class="card-title">Protocolista</h3>
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

        <!--  tabela "antiga" -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with default features</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-striped w-100 shadow ">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>%</th>
                                    <th>DFD</th>
                                    <th>NUP</th>
                                    <th>Processo Origem</th>
                                    <th>Número do processo</th>
                                    <th>Objeto</th>
                                    <th>Requisitante</th>
                                    <th>Analista</th>
                                    <th>Situação</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<!-- Ajax scripts -->
<script>
    $(document).ready(function() {

        // $.ajax({
        //     url: "ajax/processos.ajax.php",
        //     method: 'POST',
        //     data: {
        //         'action': 1
        //     }, //1: Listar Processos no console
        //     dataType: 'json',
        //     success: function(response) {
        //         console.log("reponse", response);
        //     }

        // });



        var table1 = $('#example1').DataTable({

            language: {
                url: "views/assets/plugins/language/json/pt_br.json"
            },

            ajax: {
                url: "ajax/processos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: {
                    'action': 1
                }, //1: Listar Processos na tabela
            },

            pageLength: [20, 50, 100],
            pageLength: 20,

            responsive: {
                details: {
                    type: 'column'
                }
            },



            columnDefs: [{
                    targets: 0,
                    orderable: false,
                    className: 'control'
                },
                {
                    targets: 10,
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return "<center>" +
                            "<span class='btnPainelProcesso text-navy px-1' style='cursor: pointer;'>" +
                            "<i class='fas fa-clipboard fs-5'></i>" +
                            "</span>" +

                            "<span class='btnPregoeiroProcesso text-orange px-1' style='cursor: pointer;'>" +
                            "<i class='fas fa-gavel fs-5'></i>" +
                            "</span>" +

                            "<span class='btnProtocoProcesso text-primary px-1' style='cursor: pointer;'>" +
                            "<i class='fas fa-stamp fs-5'></i>" +
                            "</span>" +

                            "<span class='btnEditarProcesso text-success px-1' style='cursor: pointer;'>" +
                            "<i class='fas fa-edit'></i>" +
                            "</span>" +

                            "<span class='btnDeletarProcesso text-danger px-1' style='cursor: pointer;'>" +
                            "<i class='fas fa-trash fs-5'></i>" +
                            "</span>" +
                            "</center>"
                    }
                }
            ],

            dom: 'Bfrtip',
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis", "pageLength"],

        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>
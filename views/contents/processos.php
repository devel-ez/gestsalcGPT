<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">

    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!--  tabela  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-lg-2 col-md-12">
                            <td>
                                <button id="btnCadastrarProcesso" class="btn btn-block bg-gradient-success" data-toggle="modal" data-target="#mdlCadastrarProcesso">Cadastrar processo<i class="fas fa-plus fa-xs float-right" style="padding-top: 5px"></i></button>
                            </td>
                        </div>
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

<!-- Tela modal para cadastro de processo -->
<div class="modal fade" id="mdlCadastrarProcesso" role="dialog">

    <div class="modal-dialog modal-lg">
        <!-- Conteúdo do modal -->
        <div class="modal-content">

            <!-- Cabecalho do modal -->
            <div class="modal-header bg-success py-1">
                <h5 class="modal-title">Novo Processo</h5>
                <hr>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" id="btnFecharModal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>

            <!-- Corpo do modal -->
            <div class="modal-body">

                <!-- Abrir uma linha -->
                <div class="row">

                    <!-- Coluna para registro do tipo do processo -->
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label class="" for="selTipoProcesso"><i class="fas fa-dumpster fs-6"></i>
                                <span class="small">Tipo do processo</span><span class="text-danger">*</span>
                            </label> <br>
                            <select class="custom-select custom-select-sm w-100" aria label="from-select-sm example" id="selProcesso"></select>
                            <span id="validate_processo" class="text-danger small fst-italic" style="display:none"> Escolha uma das opções</span>
                        </div>
                    </div>
                    <!-- /Coluna para registro do tipo do processo -->
                    <!-- Coluna para registro do número do processo -->
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label class="" for="idProcesso"><i class="fas fa-barcode fs-6"></i>
                                <span class="small">Número do processo</span><span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="idProcesso" name="idProcesso" placeholder="Processo origem" required>
                            <span id="validate_codigo" class="text-danger small fst-italic" style="display:none"> Registre o número do processo</span>
                        </div>
                    </div>
                    <!-- /Coluna para registro do número do processo -->

                    <!-- Coluna para Descrição resumida do processo -->
                    <div class="col-lg-6">
                        <div class="form-group mb-2">
                            <label class="" for="idDescricaoResumida"><i class="fas fa-file-signature fs-6"></i>
                                <span class="small">Descrição resumida</span><span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="idDescricaoResumida" placeholder="Faça uma descrição resumida do processo">
                            <span id="validate_descricao_resumida" class="text-danger small fst-italic" style="display:none"> Faça uma descrição resumida do processo</span>
                        </div>
                    </div>
                    <!-- /Coluna para Descrição resumida do processo  -->

                    <!-- Coluna para Descrição detalhada do processo -->
                    <div class="col-lg-12">
                        <div class="form-group mb-2">
                            <label class="" for="idDescricaoDetalhada"><i class="fas fa-file-signature fs-6"></i>
                                <span class="small">Descrição detalhada</span><span class="text-danger">*</span>
                            </label>
                            <textarea type="text" class="form-control form-control-sm" id="idDescricaoDetalhada" placeholder="Faça uma descrição detalhada do processo"></textarea>
                            <span id="validate_descricao_resumida" class="text-danger small fst-italic" style="display:none;"> Faça uma descrição detalhada do processo</span>
                        </div>
                    </div>
                    <!-- /Coluna para Descrição detalhada do processo  -->


                </div>
            </div>
        </div>
    </div>
    <!-- /Tela modal para cadastro de processo -->
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


                buttons: [{
                    action: function(e, dt, node, config) {
                        $("mdlCadastrarProcesso").modal('show');
                    }
                }],
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
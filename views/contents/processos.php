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
                                    <th>NUP</th>
                                    <th>Processo Origem</th>
                                    <th>Número do processo</th>
                                    <th>Objeto</th>
                                    <th>Requisitante</th>
                                    <th>Fase</th>
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

    <div class="modal-dialog modal-xl-custom">
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
                    <!-- Coluna para registro do NUP -->
                    <div class="col-lg-3">
                        <div class="form-group mb-2">
                            <label class="" for="iNup">
                                <span class="small">NUP</span><span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="idNup" name="idNup" placeholder="NUP" required oninput="formatNUP(this)">
                            <span id="validate_nup" class="text-danger small fst-italic" style="display:none"> Registre o números do NUP</span>
                        </div>
                    </div>
                    <!-- /Coluna para registro do NUP-->

                    <!-- Coluna para registro do tipo do processo -->
                    <div class="col-lg-3">
                        <div class="form-group mb-2">
                            <label class="" for="selTipoProcesso">
                                <span class="small">Tipo do processo</span><span class="text-danger">*</span>
                            </label> <br>
                            <select class="custom-select custom-select-sm w-100" aria label="from-select-sm example" id="selProcesso">
                                <option value="" disabled selected>Selecione...</option>
                                <option value="Pregão SRP">Pregão SRP</option>
                                <option value="Pregão Tradicional">Pregão Tradicional</option>
                                <option value="Pregão IRP">Pregão IRP</option>
                                <option value="Inexigibilidade">Inexigibilidade</option>
                                <option value="Dispensa Eletrônica Com Disputa">Dispensa Eletrônica Com Disputa</option>
                                <option value="Dispensa Eletrônica Sem Disputa">Dispensa Eletrônica Sem Disputa</option>
                                <option value="Dispensa Ratificada">Dispensa Ratificada</option>
                                <option value="Concorrência">Concorrência</option>
                                <option value="Carona Pregão SRP">Carona Pregão SRP</option>
                                <option value="Aguardando definição">Aguardando definição</option>
                            </select>
                            <span id="validate_processo" class="text-danger small fst-italic" style="display:none"> Escolha uma das opções</span>
                        </div>
                    </div>
                    <!-- /Coluna para registro do tipo do processo -->
                    <!-- Coluna para registro do número do processo -->
                    <div class="col-lg-2">
                        <div class="form-group mb-2">
                            <label class="" for="idNrProcesso">
                                <span class="small">Número do processo</span><span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="idNrProcesso" name="idNrProcesso" placeholder="Processo origem" required oninput="formatDfdNrProcesso(this)">
                            <span id="validate_nr_processo" class="text-danger small fst-italic" style="display:none"> Registre o número do processo</span>
                        </div>
                    </div>
                    <!-- /Coluna para registro do número do processo -->

                    <!-- Coluna para Descrição resumida do processo -->
                    <div class="col-lg-4">
                        <div class="form-group mb-2">
                            <label class="" for="idDescricaoResumida"><i class="fas fa-file-signature fs-6"></i>
                                <span class="small">Descrição resumida (50 caracteres)</span><span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control form-control-sm" id="idDescricaoResumida" placeholder="Faça uma descrição resumida do processo" maxlength="50">
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
                    <!-- Coluna para registro do requisitante -->
                    <div class="col-lg-2">
                        <div class="form-group mb-2">
                            <label class="" for="selRequisitante">
                                <span class="small">Requisitante</span><span class="text-danger">*</span>
                            </label> <br>
                            <select class="custom-select custom-select-sm w-100" aria label="from-select-sm example" id="selProcesso">
                                <option value="" disabled selected>Selecione...</option>
                                <option value="Pregão SRP">7ºCTA</option>
                                <option value="Pregão Tradicional">AC Defesa</option>
                                <option value="Pregão IRP">DPI</option>
                                <option value="Inexigibilidade">PAC</option>
                                <option value="Dispensa Eletrônica Com Disputa">DCI</option>
                                <option value="Dispensa Eletrônica Sem Disputa">FA</option>
                                <option value="Dispensa Ratificada">DGSI</option>
                                <option value="Concorrência">Almoxarifado</option>
                            </select>
                            <span id="validate_processo" class="text-danger small fst-italic" style="display:none"> Escolha o requisitante</span>
                        </div>
                    </div>
                    <!-- /Coluna para registro do requisitante -->
                    <!-- Coluna para registro da Fase -->
                    <div class="col-lg-2">
                        <div class="form-group mb-2">
                            <label class="" for="selRequisitante">
                                <span class="small">Fase</span><span class="text-danger">*</span>
                            </label> <br>
                            <select class="custom-select custom-select-sm w-100" aria label="from-select-sm example" id="selProcesso">
                                <option value="" disabled selected>Selecione...</option>
                                <option value="Pregão SRP">Na fila</option>
                                <option value="Pregão Tradicional">Fase 1 - EPC</option>
                                <option value="Pregão IRP">Fase 2 - Análise SALC</option>
                                <option value="Inexigibilidade">Fase 3 - Adequação EPC</option>
                                <option value="Dispensa Eletrônica Com Disputa">Fase 4 - Conjur</option>
                                <option value="Dispensa Eletrônica Sem Disputa">Fase 5 - Saneamento</option>
                                <option value="Dispensa Ratificada">Fase 6 - Fase Externa</option>
                                <option value="Concorrência">Fase 7 - Em contratação</option>
                                <option value="Concorrência">Fase 8 - Contratado</option>
                            </select>
                            <span id="validate_processo" class="text-danger small fst-italic" style="display:none"> Escolha a fase do processo</span>
                        </div>
                    </div>
                    <!-- /Coluna para registro da Fase-->
                    <!-- Coluna para registro do número dos DFDs -->
                    <div class="col-lg-3">
                        <div class="form-group mb-2 ">
                            <label class="" for="idDfd">
                                <span class="small">Números dos DFDs</span><span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" id="idDfd" name="idDfd" placeholder="Números dos DFDs" required oninput="formatDfdNrProcesso(this)">
                                <span id="validate_dfd" class="text-danger small fst-italic" style="display:none"> Registre o números dos DFDs</span>
                                <div class="input-group-append">
                                    <button id="addDfdButton" class="btn btn-dark btn-sm" onclick="addDfd()">Adicionar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Coluna para registro do número dos DFDs -->
                    <!-- Coluna para DFDs vinculados -->
                    <div class="col-lg-5">
                        <div class="form-group mb-2">
                            <label class="" for="idDfd2"><i class="fas fa-file-signature fs-6"></i>
                                <span class="small">DFD(s) vinculados ao processo</span><span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <textarea type="text" class="form-control form-control-sm" id="idDfd2" placeholder="DFD(s) adicionados"></textarea>
                                <span id="validate_dfds_vinculados" class="text-danger small fst-italic" style="display:none;"> Registre o(s) DFD(s) vinculados ao processo</span>
                                <div class="input-group-append">
                                    <button id="deleteDfdButton" class="btn btn-dark btn-sm" onclick="deleteLastDfd()">Deletar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Coluna para DFDs vinculados  -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Tela modal para cadastro de processo -->
    <!-- Ajax scripts -->
    <script>
        // Ao carregar a página, formata o campo NUP
        window.onload = function() {
            const nupInput = document.getElementById("idNup");
            formatNUP(nupInput);
            const dfdInput = document.getElementById("idDfd");
            formatDfdNrProcesso(dfdInput);
            const NrProcessoInput = document.getElementById("idNrProcesso");
            formatDfdNrProcesso(NrProcessoInput);
        };

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


            var table = $('#example1').DataTable({



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
                        targets: 8,
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

            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)')
        });
    </script>
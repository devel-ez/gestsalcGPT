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

                                    <th>id</th>
                                    <th>control</th>
                                    <th>%</th>
                                    <th>Tipo processo Origem</th>
                                    <th>Número do processo</th>
                                    <th>NUP</th>
                                    <th>Processo Origem</th>
                                    <th>Objeto</th>
                                    <th>descrição detalhada</th>
                                    <th>data de entrada</th>
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

    <div class="modal-dialog modal-lg">
        <!-- Conteúdo do modal -->
        <div class="modal-content">

            <!-- Cabecalho do modal -->
            <div class="modal-header bg-success py-1">
                <h5 class="modal-title">Novo Processo</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" id="btnFecharModal" data-dismiss="modal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>

            <!-- Corpo do modal -->
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <!-- Abrir uma linha -->
                    <div class="row">
                        <!-- Coluna para RETORNO DO ID NO EDITAR HIDEN -->
                        <input id="idId" type="text" hidden></ipnput>
                        <!-- /Coluna para RETORNO DO ID NO EDITAR HIDEN -->

                        <!-- Coluna para registro do NUP -->
                        <div class="col-lg-3">
                            <div class="form-group mb-2">
                                <label class="" for="iNup">
                                    <span class="small">NUP</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="idNup" name="idNup" placeholder="_____.______/____-__" required oninput="maskedinput(this)">
                                <div class="invalid-feedback"> Digite o NUP</div>
                            </div>
                        </div>
                        <!-- /Coluna para registro do NUP-->

                        <!-- Coluna para registro do tipo do processo -->
                        <div class="col-lg-5">
                            <div class="form-group mb-2">
                                <label class="" for="selTipoProcesso">
                                    <span class="small">Tipo do processo</span><span class="text-danger">*</span>
                                </label> <br>
                                <select class="custom-select custom-select-sm w-100" aria label="from-select-sm example" id="selProcesso" required>
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
                                <div class="invalid-feedback"> Selecione um tipo de processo</div>
                            </div>
                        </div>
                        <!-- /Coluna para registro do tipo do processo -->
                        <!-- Coluna para registro do número do processo -->
                        <div class="col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="idNrProcesso">
                                    <span class="small">Número do processo</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="idNrProcesso" name="idNrProcesso" placeholder="_____/____" required oninput="maskedinput(this)">
                                <div class="invalid-feedback"> Digite o número do processo</div>
                            </div>
                        </div>
                        <!-- /Coluna para registro do número do processo -->
                        <hr />
                        <!-- Coluna para registro do requisitante -->
                        <div class="col-lg-3 mt-3 ">
                            <div class="form-group mb-2">
                                <label class="" for="selRequisitante">
                                    <span class="small">Requisitante</span><span class="text-danger">*</span>
                                </label> <br>
                                <select class="custom-select custom-select-sm w-100" aria label="from-select-sm example" id="selRequisitante" required>
                                    <option value="" disabled selected>Selecione...</option>
                                    <option value="7ºCT">7ºCTA</option>
                                    <option value="AC Defesa">AC Defesa</option>
                                    <option value="DPI">DPI</option>
                                    <option value="PAC">PAC</option>
                                    <option value="DCI">DCI</option>
                                    <option value="FA">FA</option>
                                    <option value="DGSI">DGSI</option>
                                    <option value="Almoxarifado">Almoxarifado</option>
                                </select>
                                <div class="invalid-feedback"> Selecione um requisitante</div>
                            </div>
                        </div>
                        <!-- /Coluna para registro do requisitante -->

                        <!-- Coluna para registro da Fase -->
                        <div class="col-lg-4 mt-3 ">
                            <div class="form-group mb-2">
                                <label class="" for="selFase">
                                    <span class="small">Fase</span><span class="text-danger">*</span>
                                </label> <br>
                                <select class="custom-select custom-select-sm w-100" aria label="from-select-sm example" id="selFase" required>
                                    <option value="" disabled selected>Selecione...</option>
                                    <option value="Na fila">Na fila</option>
                                    <option value="Fase 1 - EPC">Fase 1 - EPC</option>
                                    <option value="Fase 2 - Análise SALC">Fase 2 - Análise SALC</option>
                                    <option value="Fase 3 - Adequação EPC">Fase 3 - Adequação EPC</option>
                                    <option value="Fase 4 - Conjur">Fase 4 - Conjur</option>
                                    <option value="Fase 5 - Saneamento">Fase 5 - Saneamento</option>
                                    <option value="Fase 6 - Fase Externa">Fase 6 - Fase Externa</option>
                                    <option value="Fase 7 - Em contratação">Fase 7 - Em contratação</option>
                                    <option value="Fase 8 - Contratado">Fase 8 - Contratado</option>
                                </select>
                                <div class="invalid-feedback"> Selecione uma fase</div>
                            </div>
                        </div>
                        <!-- /Coluna para registro da Fase-->
                        <hr />
                        <!-- Coluna para Descrição resumida do processo -->
                        <div class="col-lg-6 mt-4">
                            <div class="form-group mb-2">
                                <label class="" for="idDescricaoResumida">
                                    <span class="small">Descrição resumida (30 caracteres)</span><span class="text-danger">*</span>
                                </label>
                                <textarea type="text" class="form-control form-control-sm" id="idDescricaoResumida" placeholder="Faça uma descrição resumida do processo" maxlength="50" required></textarea>
                                <div class="invalid-feedback"> Escreva uma descrição resumida</div>
                            </div>
                        </div>
                        <!-- /Coluna para Descrição resumida do processo  -->

                        <!-- Coluna para Descrição detalhada do processo -->
                        <div class="col-lg-6 mt-4">
                            <div class="form-group mb-2">
                                <label class="" for="idDescricaoDetalhada">
                                    <span class="small">Descrição detalhada</span><span class="text-danger">*</span>
                                </label>
                                <textarea type="text" class="form-control form-control-sm" id="idDescricaoDetalhada" placeholder="Faça uma descrição detalhada do processo" required></textarea>
                                <div class="invalid-feedback"> Escreva uma descrição detalhada</div>
                            </div>
                        </div>
                        <!-- /Coluna para Descrição detalhada do processo  -->
                        <hr />
                        <!-- Coluna para 1ª data de entrada do processo -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="" for="DataEntrada">
                                    <span class="small">Data de entrada</span><span class="text-danger">*</span>
                                </label>
                                <div class="input-group" id="DataEntrada">
                                    <input type="date" class="form-control" id="idDataEntrada" required />
                                    <div class="invalid-feedback"> Selecione uma data</div>
                                </div>
                            </div>
                        </div>
                        <!-- /Coluna para 1ª data de entrada do processo   -->
                    </div>
                </form>
                <!-- Botões Salvar e cancelar -->
                <div class="col-lg-12">
                    <div class="form-group d-flex justify-content-end">
                        <button type="button" id="salvarButton" class="btn btn-success btn-sm ml-2" data-bs-dismiss="modal">Salvar</button>
                        <button type="button" id="cancelarButton" class="btn btn-danger btn-sm ml-2" data-dismiss="modal">Cancelar</button>
                    </div>
                    <!-- /Botões Salvar e cancelar -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Tela modal para cadastro de processo -->

<!-- Tela modal para kanban do processo -->
<div class="modal fade modal-xl-custom" id="mdlKanbanProcesso" role=" dialog">
    <div class="modal-dialog modal-xl-custom">
        <!-- Conteúdo do modal -->
        <div class="modal-content">
            <!-- Cabecalho do modal -->
            <div class="modal-header bg-gray-dark py-1">
                <h5 class="modal-title">Tarefas do processo - Kanban Board</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5 btnFecharModalKanban" id="btnFecharModalKanban" data-dismiss="modal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>
            <!-- /Cabecalho do modal -->
            <!-- Botões Salvar e Limpar -->
            <div class="col-lg-12 mt-3">
                <div class="form-group d-flex justify-content-center">
                    <button type="button" id="salvarButtonKanban" class="btn btn-success btn-sm ml-2">Salvar</button>
                    <button type="button" id="limparButtonKanban" class="btn btn-danger btn-sm ml-2">Limpar</button>
                </div>
                <!-- /Botões Salvar e Limpar -->
                <!-- Corpo do modal -->
                <div class="modal-body bg-light">
                    <div class="container-fluid kanban-container">
                        <div class="row">
                            <div class="col-md-4 tarefas-col" id="tarefas-pendentes">
                                <div class="card">
                                    <div class="card-header bg-warning">
                                        Pendentes
                                    </div>
                                    <div class="card-body column-kanban" id="pendentes">
                                        <button class="btn btn-secondary btn-sm float-left mb-2" onclick="showTextArea('pendentes')"><i class="fas fa-plus"></i></button>
                                        <!-- Adicione suas tarefas pendentes aqui -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 tarefas-col" id="tarefas-em-progresso">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        Em Progresso
                                    </div>
                                    <div class="card-body column-kanban" id="em-progresso">
                                        <button class="btn btn-secondary btn-sm float-left mb-2" onclick="showTextArea('em-progresso')"><i class="fas fa-plus"></i></button>
                                        <!-- Adicione suas tarefas em progresso aqui -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 tarefas-col" id="tarefas-concluidas">
                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        Concluídas
                                    </div>
                                    <div class="card-body column-kanban" id="concluidas">
                                        <button class="btn btn-secondary btn-sm float-left mb-2" onclick="showTextArea('concluidas')"><i class="fas fa-plus"></i></button>
                                        <!-- Adicione suas tarefas concluídas aqui -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Corpo do modal -->
            </div>
        </div>
    </div>
    <!-- /Tela modal para kanban do processo -->






    <!-- Ajax scripts -->
    <script>
        /* -------------------------------------------------------------------------- */
        /*                                 Sweetalert                                 */
        /* -------------------------------------------------------------------------- */
        var Toast = swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000
        });

        var table;
        var action;
        var linhaId;

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



            table = $('#example1').DataTable({

                // buttons: [{
                //     action: function(e, dt, node, config) {
                //         $("mdlCadastrarProcesso").modal('show');
                //         action = 2;
                //     }
                // }],
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


                columnDefs: [

                    {
                        targets: 0,
                        visible: false,
                    },

                    {
                        targets: 1,
                        orderable: false,
                        className: 'control'
                    },
                    {
                        targets: 2,
                        orderable: false,
                        render: function(data, type, full, meta) {
                            var fase = full[11]; // Valor da coluna "fase"
                            var percentual = getPercentualPorFase(fase);
                            var badgeClass = getBadgeClassPorFase(fase);

                            return "<center>" +
                                "<span class='" + badgeClass + " btnProgresso text-navy px-1'>" + percentual + "%" +
                                "</span>" +
                                "</center>";
                        }
                    },
                    {
                        targets: 03,
                        visible: false,
                    },
                    {
                        targets: 04,
                        visible: false,
                    },
                    {
                        targets: 08,
                        visible: false,
                    },
                    {
                        targets: 09,
                        visible: false,
                    },

                    {
                        targets: 12,
                        orderable: false,
                        render: function(data, type, full, meta) {
                            return "<center>" +
                                "<span class='btnKanbanProcesso text-bg-gray-dark px-1' style='cursor: pointer;'>" +
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

            })


        });

        /* -------------------------------------------------------------------------- */
        /*                  Sincroniza o progresso com a coluna fase                  */
        /* -------------------------------------------------------------------------- */
        function getPercentualPorFase(fase) {
            // lógica para retornar o percentual baseado na fase selecionada
            // Exemplo: se fase for 1, retorne 10%; se fase for 2, retorne 20%, etc.
            switch (fase) {
                case "Na fila":
                    return 0;
                case "Fase 1 - EPC":
                    return 10;
                case "Fase 2 - Análise SALC":
                    return 20;
                case "Fase 3 - Adequação EPC":
                    return 30;
                case "Fase 4 - Conjur":
                    return 40;
                case "Fase 5 - Saneamento":
                    return 50;
                case "Fase 6 - Fase Externa":
                    return 70;
                case "Fase 7 - Em contratação":
                    return 80;
                case "Fase 8 - Contratado":
                    return 100;
                    // Defina mais casos conforme necessário
                default:
                    return 0; // Percentual padrão se a fase não for reconhecida
            }
        }

        /* -------------------------------------------------------------------------- */
        /*                  Sincroniza o progresso com a coluna fase                  */
        /* -------------------------------------------------------------------------- */
        function getBadgeClassPorFase(fase) {
            // lógica para retornar a classe da badge baseada na fase selecionada
            // Exemplo: se fase for 1, retorne 'badge bg-danger'; se fase for 2, retorne 'badge bg-warning', etc.
            switch (fase) {

                case "Na fila":
                    return 'badge bg-danger';

                case "Fase 1 - EPC":
                    return 'badge bg-danger';

                case "Fase 2 - Análise SALC":
                    return 'badge bg-danger';

                case "Fase 3 - Adequação EPC":
                    return 'badge bg-danger';

                case "Fase 4 - Conjur":
                    return 'badge bg-warning';

                case "Fase 5 - Saneamento":
                    return 'badge bg-warning';

                case "Fase 6 - Fase Externa":
                    return 'badge bg-primary';

                case "Fase 7 - Em contratação":
                    return 'badge bg-primary';

                case "Fase 8 - Contratado":
                    return 'badge bg-success';
                    // Defina mais casos conforme necessário

                default:
                    return 'badge bg-secondary'; // Classe padrão se a fase não for reconhecida
            }
        }

        /* -------------------------------------------------------------------------- */
        /*             Limpar inputs do modal ao cancelar ou fechar modal             */
        /* -------------------------------------------------------------------------- */
        $("#cancelarButton, #btnFecharModal").on('click', function() {

            $("#idNup").val("");
            $("#selProcesso").val(0);
            $("#idNrProcesso").val("");
            $("#selRequisitante").val(0);
            $("#selFase").val(0);
            $("#idDescricaoResumida").val("");
            $("#idDescricaoDetalhada").val("");
            $("#idDataEntrada").val(0);

        })

        /* -------------------------------------------------------------------------- */
        /*           Limpar a validação quando o botão cancelar é pressionado          */
        /* -------------------------------------------------------------------------- */
        document.getElementById("cancelarButton").addEventListener("click", function() {

            $(".needs-validation").removeClass("was-validated");
        });

        $("#btnCadastrarProcesso").on('click', function() {

            action = 2;
        });

        /* -------------------------------------------------------------------------- */
        /*       Validar formulário, cadastrar processos e atualizar tabela           */
        /* -------------------------------------------------------------------------- */
        document.getElementById("salvarButton").addEventListener("click", function() {

            var forms = document.getElementsByClassName("needs-validation");

            var validation = Array.prototype.filter.call(forms, function(form) {

                if (form.checkValidity() === true) {
                    console.log("Preenchimento válido")

                    var text_msgSwal = "";
                    if (action == 2) {

                    }

                    //Validar entrada nos campos inputs
                    Swal.fire({
                        title: 'Confirma o cadastro do processo?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Sim',
                        cancelButtonColor: '#d33',
                        cancelButtonText: 'Não'
                    }).then((result) => {

                        if (result.isConfirmed) {

                            var dados = new FormData();

                            dados.append("action", action);
                            dados.append("idId", $("#idId").val());
                            dados.append("idNup", $("#idNup").val());
                            dados.append("selProcesso", $("#selProcesso").val());
                            dados.append("idNrProcesso", $("#idNrProcesso").val());
                            dados.append("selRequisitante", $("#selRequisitante").val());
                            dados.append("selFase", $("#selFase").val());
                            dados.append("idDescricaoResumida", $("#idDescricaoResumida").val());
                            dados.append("idDescricaoDetalhada", $("#idDescricaoDetalhada").val());
                            dados.append("idDataEntrada", $("#idDataEntrada").val());


                            // Exibir os dados no console
                            // console.log("Dados do Formulário:");
                            // for (var pair of dados.entries()) {
                            //     console.log(pair[0] + ": " + pair[1]);
                            // }

                            if (action == 2) {
                                var title_msg = "Processo cadastrado com sucesso!"
                            }

                            if (action == 3) {
                                var title_msg = "Processo editado com sucesso!"
                            }

                            $.ajax({

                                url: "ajax/processos.ajax.php",
                                method: "POST",
                                data: dados,
                                cache: false,
                                contentType: false,
                                processData: false,
                                dataType: 'json',

                                success: function(response) {

                                    if (response == "ok") {

                                        Toast.fire({
                                            icon: 'success',
                                            title: title_msg
                                        });

                                        table.ajax.reload();

                                        $("#mdlCadastrarProcesso").modal('hide');
                                        $("#idNup").val("");
                                        $("#selProcesso").val(0);
                                        $("#idNrProcesso").val("");
                                        $("#selRequisitante").val(0);
                                        $("#selFase").val(0);
                                        $("#idDescricaoResumida").val("");
                                        $("#idDescricaoDetalhada").val("");
                                        $("#idDataEntrada").val("");
                                        $(".needs-validation").removeClass("was-validated");

                                    } else {

                                        Toast.fire({

                                            icon: 'error',
                                            title: 'Processo não cadastrado!'
                                        });
                                    }
                                },

                            });
                        }
                    })
                } else {
                    console.log("Preenchimento inválido")
                }

                form.classList.add('was-validated');

            });

        });

        /* -------------------------------------------------------------------------- */
        /*                         Editar processos cadastrados                        */
        /* -------------------------------------------------------------------------- */
        $("#example1").on("click", ".btnEditarProcesso", function() {

            action = 3;

            $("#mdlCadastrarProcesso").modal('show');

            var data = table.row($(this).parents('tr')).data();

            $("#idId").val(data[0]);
            $("#idNup").val(data[5]);
            $("#selProcesso").val(data[3]);
            $("#idNrProcesso").val(data[4]);
            $("#selRequisitante").val(data[10]);
            $("#selFase").val(data[11]);
            $("#idDescricaoResumida").val(data[7]);
            $("#idDescricaoDetalhada").val(data[8]);
            $("#idDataEntrada").val(data[9]);
        });


        /* -------------------------------------------------------------------------- */
        /*                         Deletar processo da tabela                         */
        /* -------------------------------------------------------------------------- */
        $('#example1').on("click", ".btnDeletarProcesso", function() {

            action = 4;

            var data = table.row($(this).parents('tr')).data();

            var idId = data[0];

            //Validar entrada nos campos inputs
            Swal.fire({
                title: 'Confirma detelar o processo?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Sim, desejo deletar!',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Não'
            }).then((result) => {

                if (result.isConfirmed) {

                    var dados = new FormData();

                    dados.append("action", action);
                    dados.append("idId", idId);

                    // Exibir os dados no console
                    // console.log("Dados do Formulário:");
                    for (var pair of dados.entries()) {
                        console.log(pair[0] + ": " + pair[1]);
                    }

                    $.ajax({

                        url: "ajax/processos.ajax.php",
                        method: "POST",
                        data: dados,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',

                        success: function(response) {

                            if (response == "ok") {

                                Toast.fire({
                                    icon: 'success',
                                    title: "Processo deletado com sucesso!"
                                });

                                table.ajax.reload();


                            } else {

                                Toast.fire({

                                    icon: 'error',
                                    title: 'Processo não foi deletado!'
                                });
                            }
                        },

                    });
                }
            })

        });

        /* -------------------------------------------------------------------------- */
        /*                     Abre o kanban do processo no modal                     */
        /* -------------------------------------------------------------------------- */

        $("#example1").on("click", ".btnKanbanProcesso", function() {
            var data = table.row($(this).parents('tr')).data();
            linhaId = data[0]; // Assuming the ID is in the first column

            // var modalKanban = document.getElementById('mdlKanbanProcesso');
            // modalKanban.setAttribute('id', 'mdlKanbanProcesso' + linhaId);

            // var modal = $("#mdlKanbanProcesso" + linhaId);

            // Lógica para preencher o modal com informações específicas da linha
            // Você pode usar o valor do rowId para buscar e preencher as informações

            // Show the modal
            // modal.modal('show');
            $("#mdlKanbanProcesso").modal('show');

            $(".card-wrapper").each(function() {
                $(this).remove();

            });

            // console.log(linhaId);

            return linhaId;



        });

        /* -------------------------------------------------------------------------- */
        /*                   Adiciona os cards das tarefas do kanban                  */
        /* -------------------------------------------------------------------------- */
        function showTextArea(containerId) {
            var container = document.getElementById(containerId);
            var cardWrapper = document.createElement("div");
            cardWrapper.className = "card-wrapper";

            var card = document.createElement("div");
            card.className = "card card-dark card-outline mt-2 col-md-12";

            var cardHeader = document.createElement("div");
            cardHeader.className = "card-header";
            cardHeader.style.position = "relative"; // Adicione esta linha

            var cardDeleteButton = document.createElement("button");
            cardDeleteButton.className = "btn btn-link btn-sm text-secondary card-delete-button";
            cardDeleteButton.innerHTML = '<i class="fas fa-times"></i>';
            cardDeleteButton.style.position = "absolute";
            cardDeleteButton.style.top = "0";
            cardDeleteButton.style.right = "0";

            cardDeleteButton.addEventListener("click", function() {
                cardWrapper.parentNode.removeChild(cardWrapper); // Remova o cardWrapper do seu pai
            });

            cardHeader.appendChild(cardDeleteButton);

            var cardTitle = document.createElement("h5");
            cardTitle.className = "card-title";
            cardHeader.appendChild(cardTitle);

            var cardTitleTextArea = document.createElement("textarea");
            cardTitleTextArea.className = "form-control placeholder card-title-bold card-title-textarea";
            cardTitleTextArea.setAttribute("rows", "1");
            cardTitleTextArea.setAttribute("placeholder", "Título da Nova Tarefa");
            cardHeader.appendChild(cardTitleTextArea);

            var cardBody = document.createElement("div");
            cardBody.className = "card-body";

            var cardBodyTextArea = document.createElement("textarea");
            cardBodyTextArea.className = "form-control placeholder card-description-textarea";
            cardBodyTextArea.setAttribute("rows", "3");
            cardBodyTextArea.setAttribute("placeholder", "Digite a descrição da tarefa...");
            cardBody.appendChild(cardBodyTextArea);

            card.appendChild(cardHeader);
            card.appendChild(cardBody);

            cardWrapper.appendChild(card);


            container.appendChild(cardWrapper);

            // Resto do seu código para inicializar o drag-and-drop com dragula
        }

        /* -------------------------------------------------------------------------- */
        /*           Possibilida mover os cards das tarefas entre as colunas          */
        /* -------------------------------------------------------------------------- */
        $(document).ready(function() {
            $(".card-body").sortable({
                connectWith: ".column-kanban",
                handle: ".card-header",
                placeholder: "card-placeholder",
                start: function(event, ui) {
                    ui.item.data("originalParent", ui.item.parent());
                },
                stop: function(event, ui) {
                    var originalParent = ui.item.data("originalParent");
                    var targetColumn = ui.item.parent();

                    if (!isValidTarget(targetColumn)) {
                        originalParent.append(ui.item);
                    }
                }
            }).disableSelection();

            $(".card-delete-button").click(function() {
                $(this).closest(".card-wrapper").remove();
            });

            function isValidTarget(targetColumn) {
                var validColumns = ["tarefas-pendentes", "tarefas-em-progresso", "tarefas-concluidas"];
                return validColumns.includes(targetColumn.closest(".col-md-4").attr("id"));
            }
        });


        /* -------------------------------------------------------------------------- */
        /*                             Salvar kanban no bd                            */
        /* -------------------------------------------------------------------------- */
        $('#salvarButtonKanban').on('click', function() {

            var rowId = linhaId;

            var cardData = []; // Crie um array para armazenar os dados dos cards

            $(".card-wrapper").each(function() {
                var cardTitle = $(this).find(".card-title-textarea").val();
                var cardDescription = $(this).find(".card-description-textarea").val();
                cardData.push({
                    title: cardTitle,
                    description: cardDescription
                });

                if (cardData == "") {
                    return "cardData Vazio";
                }

                // Enviar os dados dos cards para o servidor
                $.ajax({
                    url: "ajax/processos.ajax.php",
                    method: "POST",
                    data: {
                        rowId: rowId,
                        cardData: cardData,
                        action: 5,
                    }, // Envie o ID da linha e os dados dos cards
                    // cache: false,
                    // contentType: false,
                    // processData: false,
                    // dataType: 'json',


                    success: function(response) {

                        console.log("response: " + response);

                        if (response == '"ok"') {
                            Toast.fire({
                                icon: 'success',
                                title: "Kanban salvo com sucesso!"
                            });
                        } else if (rowId || cardData == null) {
                            return "vazio";
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'Processo não cadastrado!',

                            });
                        }
                    },
                    error: function(error) {
                        console.error("Erro ao salvar informações no servidor:", error);
                    },


                });
            });


        });

        /* -------------------------------------------------------------------------- */
        /*                      Limpar todas as tarefas do kanban                     */
        /* -------------------------------------------------------------------------- */
        $('#limparButtonKanban').on('click', function() {

            
            $(".card-wrapper").each(function() {
                $(this).remove();
            });

        });

    </script>
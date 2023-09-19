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
                                    <th>Analista</th>
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

                        <!-- Coluna para analista -->
                        <div class="col-lg-4 mt-3 ">
                            <div class="form-group mb-2">
                                <label class="" for="selAnalista">
                                    <span class="small">Analista</span><span class="text-danger">*</span>
                                </label> <br>
                                <select class="custom-select custom-select-sm w-100" aria label="from-select-sm example" id="selAnalista" required>
                                    <option value="" disabled selected>Selecione...</option>
                                    <option value="Ainda não definido">Ainda não definido</option>
                                </select>
                                <div class="invalid-feedback"> Selecione uma opção</div>
                            </div>
                        </div>
                        <!-- /Coluna para para analista-->
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
        <div class="modal-content bg-dark">
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
            </div>
            <!-- /Botões Salvar e Limpar -->
            <!-- Corpo do modal -->
            <div class="modal-body bg-dark">
                <div class="container-fluid kanban-container">
                    <div class="row">
                        <div class="col-md-4 tarefas-col" id="tarefas-pendentes">
                            <div class="card">
                                <div class="card-header bg-warning text-center">
                                    <button class="btn btn-secondary btn-sm float-left mb-2" onclick="addCard('pendentes')"><i class="fas fa-plus"></i></button>

                                    Pendentes
                                </div>
                                <div class="card-body column-kanban bg-secondary" id="pendentes">
                                    <!-- Adicione suas tarefas pendentes aqui -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 tarefas-col" id="tarefas-em-progresso">
                            <div class="card">
                                <div class="card-header bg-primary text-white text-center">
                                    Em Progresso
                                    <button class="btn btn-secondary btn-sm float-left mb-2" onclick="addCard('em-progresso')"><i class="fas fa-plus"></i></button>

                                </div>
                                <div class="card-body column-kanban bg-secondary" id="em-progresso">
                                    <!-- Adicione suas tarefas em progresso aqui -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 tarefas-col" id="tarefas-concluidas">
                            <div class="card">
                                <div class="card-header bg-success text-white text-center">
                                    <button class="btn btn-secondary btn-sm float-left mb-2" onclick="addCard('concluidas')"><i class="fas fa-plus"></i></button>

                                    Concluídas
                                </div>
                                <div class="card-body column-kanban bg-secondary" id="concluidas">
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

<!-- Tela modal para protocolo do processo -->
<div class="modal fade modal-xl-custom" id="mdlProtocoloProcesso" role=" dialog">
    <div class="modal-dialog modal-xl-custom">
        <!-- Conteúdo do modal -->
        <div class="modal-content bg-dark">
            <!-- Cabecalho do modal -->
            <div class="modal-header bg-gray-dark py-1">
                <h5 class="modal-title">Protocolo do processo</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5 btnFecharModalProtocolo" id="btnFecharModalProtocolo" data-dismiss="modal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>
            <!-- /Cabecalho do modal -->

            <!-- /Botões do modal -->

            <!-- Corpo do modal -->
            <div class="modal-body bg-dark">
                <div class="container-fluid Protocolo-container">
                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- formulários -->
                                <div class="col-md-3">
                                    <!-- formulário de entrada -->
                                    <div class="card card-primary">
                                        <div class="card-header">

                                            <h3 class="card-title">Entrada<i class="fas fa-arrow-right ml-2"></i></h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="" for="DataEntrada">
                                                        <span class="small text-secondary">Data de entrada</span><span class="text-danger">*</span>
                                                    </label>
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" id="DataEntradaProtocolo" required>
                                                        <div class="invalid-feedback"> Selecione uma data</div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="" for="MotivoEntradaProtocolo">
                                                        <span class="small text-secondary">Motivo (máx. 30 caracteres)</span><span class="text-danger">*</span>
                                                    </label>
                                                    <textarea type="text" class="form-control form-control-sm" id="idMotivoEntradaProtocolo" placeholder="Escreva o motivo da entrada" maxlength="50" required=""></textarea>
                                                    <div class="invalid-feedback"> Escreva o motivo da entrada</div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="button" id="buttonEntrada" class="btn btn-success" onclick="addProtocoloEntrada()">Registrar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- formulário de entrada  -->

                                    <!-- formulário de saída -->
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title"><i class="fas fa-arrow-left mr-2"></i>Saída</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="" for="DataSaida">
                                                        <span class="small text-secondary">Data de saída</span><span class="text-danger">*</span>
                                                    </label>
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" id="DataSaidaProtocolo" required="">
                                                        <div class="invalid-feedback"> Selecione uma data</div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="" for="quemRecebeu">
                                                        <span class="small text-secondary">Posto/Graduação e nome de quem recebeu</span><span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control form-control-sm text-secondary" id="quemRecebeu" name="quemRecebeu" required>
                                                    <div class="invalid-feedback"> Escreva o nome de quem recebeu o documento</div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label class="" for="MotivoSaídaProtocolo">
                                                        <span class="small text-secondary">Motivo (máx. 30 caracteres)</span><span class="text-danger">*</span>
                                                    </label>
                                                    <textarea type="text" class="form-control form-control-sm" id="MotivoSaídaProtocolo" placeholder="Escreva o motivo da entrada" maxlength="50" required=""></textarea>
                                                    <div class="invalid-feedback"> Escreva o motivo da saída</div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="button" id="buttonSaida" class="btn btn-danger" onclick="addProtocoloSaida()">Registrar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- formulário de saída  -->
                                </div>
                                <!-- /formulários -->
                                <!-- The time line -->
                                <div class="col-md-8 ml-5">

                                    <div class="timeline">

                                        <div class="time-label">
                                            <span class="bg-red">10 Feb. 2014</span>
                                        </div>
                                        <div class="protocolo">
                                            <i class="fas fa-user bg-green"></i>
                                            <div class="timeline-item">
                                                <span class="time" id="primeiraDataEntrada"></span>
                                            </div>
                                        </div>
                                        <div class="time-label">
                                            <span class="bg-green" id="labelPrimeiraDataEntrada"></span>
                                        </div>
                                        <div>
                                            <i class="fas fa-clock bg-gray"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- /The time line -->
                            </div>
                        </div>
                    </section>
                    <!-- /.content -->
                </div>
            </div>
            <!-- Corpo do modal -->
        </div>
    </div>
</div>
<!-- /Tela modal para protocolo do processo -->

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

    /* -------------------------------------------------------------------------- */
    /*                              Variáveis gobais                              */
    /* -------------------------------------------------------------------------- */
    var table;
    var action;
    var linhaId;

    /* -------------------------------------------------------------------------- */
    /*                                  DataTable                                 */
    /* -------------------------------------------------------------------------- */
    $(document).ready(function() {

        table = $('#example1').DataTable({

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
                    className: 'control',
                    visible: false,
                },
                {
                    targets: 2,
                    render: function(data, type, row) {
                        if (type === 'display') {
                            var imgName = data.split(' - ');
                            var primeroNome = imgName[1].split(' ')[0]
                            return '<img src="views/assets/dist/img/' + primeroNome + ".jpg" + '" alt="' + data + '" width="100" height="100" class="imagemAnalista">';
                        }
                        return data;
                    }
                },
                {
                    targets: 3,
                    render: function(data, type, full, meta) {
                        var fase = full[12]; // Valor da coluna "fase"
                        var percentual = getPercentualPorFase(fase);
                        var badgeClass = getBadgeClassPorFase(fase);

                        return "<center>" +
                            "<span class='" + badgeClass + " btnProgresso text-navy px-1'>" + percentual + "%" +
                            "</span>" +
                            "</center>";
                    }
                },
                {
                    targets: 04,
                    visible: false,
                },
                {
                    targets: 05,
                    visible: false,
                },
                {
                    targets: 09,
                    visible: false,
                },
                {
                    targets: 10,
                    visible: false,
                },

                {
                    targets: 13,
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
    /*                Sincroniza o % progresso com a coluna fase                  */
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
    /*                  Sincroniza a cor progresso com a coluna fase              */
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
    /*   Criar options de analistas no select do modal cadastrar processos        */
    /* -------------------------------------------------------------------------- */

    $(document).ready(function() {
        $.ajax({
            url: "ajax/processos.ajax.php",
            method: "POST",
            data: {
                action: 9
            },
            dataType: "json",
            success: function(data) {

                // console.log(data);
                // Preencher o select com os usuários
                var selectUsuario = $('#selAnalista');
                // selectUsuario.empty();
                data.forEach(function(data) {
                    // console.log(data);
                    if (data[5] == 2) {
                        selectUsuario.append($('<option>', {
                            value: data[1] + "  - " + data[2],
                            text: data[1] + " - " + data[2]
                        }));
                    }
                });
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });


    /* -------------------------------------------------------------------------- */
    /*             Limpar inputs do modal ao cancelar ou fechar modal             */
    /* -------------------------------------------------------------------------- */
    $("#cancelarButton, #btnFecharModal").on('click', function() {

        $("#idNup").val("");
        $("#selAnalista").val(0);
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


    /* -------------------------------------------------------------------------- */
    /*               Ação do botão Salvar para difereciar do Editar               */
    /* -------------------------------------------------------------------------- */
    $("#btnCadastrarProcesso").on('click', function() {

        action = 2;
    });

    /* -------------------------------------------------------------------------- */
    /*      Salvar Validar formulário, cadastrar processos e atualizar tabela     */
    /* -------------------------------------------------------------------------- */
    document.getElementById("salvarButton").addEventListener("click", function() {

        var forms = document.getElementsByClassName("needs-validation");

        var validation = Array.prototype.filter.call(forms, function(form) {

            if (form.checkValidity() === true) {
                console.log("Preenchimento válido")

                if (action == 2) {
                    var title_msg = "Confirma o cadastro do processo?!"
                }

                if (action == 3) {
                    var title_msg = "Confirma a edição do processo?"
                }

                //Validar entrada nos campos inputs
                Swal.fire({
                    title: title_msg,
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
                        dados.append("selAnalista", $("#selAnalista").val());
                        dados.append("idNup", $("#idNup").val());
                        dados.append("selProcesso", $("#selProcesso").val());
                        dados.append("idNrProcesso", $("#idNrProcesso").val());
                        dados.append("selRequisitante", $("#selRequisitante").val());
                        dados.append("selFase", $("#selFase").val());
                        dados.append("idDescricaoResumida", $("#idDescricaoResumida").val());
                        dados.append("idDescricaoDetalhada", $("#idDescricaoDetalhada").val());
                        dados.append("idDataEntrada", $("#idDataEntrada").val());
                        dados.append("protocolista", '<?php echo $_SESSION['usuario']->nome_guerra ?>');

                        console.log(dados);

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
                                    $("#selAnalista").val(0);
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
        $("#selAnalista").val(data[2]);
        $("#idNup").val(data[6]);
        $("#selProcesso").val(data[4]);
        $("#idNrProcesso").val(data[5]);
        $("#selRequisitante").val(data[11]);
        $("#selFase").val(data[12]);
        $("#idDescricaoResumida").val(data[8]);
        $("#idDescricaoDetalhada").val(data[9]);
        $("#idDataEntrada").val(data[10]);
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
                // for (var pair of dados.entries()) {
                //     console.log(pair[0] + ": " + pair[1]);
                // }

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

        $("#mdlKanbanProcesso").modal('show');

        $(".card-wrapper").each(function() {
            $(this).remove();

        });

        $.ajax({
            url: "ajax/processos.ajax.php",
            method: "POST",
            dataType: 'json',
            data: {
                'action': 8
            },


            success: function(data) {
                // Processar as tasks retornadas
                var filteredData = data.filter(function(row) {
                    return row[1] == linhaId;
                });

                filteredData.sort(function(a, b) {
                    if (a[4] > b[4]) {
                        return 1
                    } else if (a[4] < b[4]) {
                        return -1
                    } else {
                        return 0
                    }
                    return filteredData;
                });

                filteredData.forEach(function(obj) {

                    var containerId = obj["columnKanban"];

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

                    cardHeader.appendChild(cardDeleteButton);

                    var cardTitle = document.createElement("h5");
                    cardTitle.className = "card-title";
                    cardHeader.appendChild(cardTitle);

                    var cardTitleTextArea = document.createElement("textarea");
                    cardTitleTextArea.className = "form-control placeholder card-title-bold card-title-textarea";
                    cardTitleTextArea.setAttribute("rows", "1");
                    cardTitleTextArea.setAttribute("placeholder", "Título da Nova Tarefa");
                    cardTitleTextArea.value = obj["title"];
                    cardHeader.appendChild(cardTitleTextArea);



                    var cardBody = document.createElement("div");
                    cardBody.className = "card-body";

                    var cardBodyTextArea = document.createElement("textarea");
                    cardBodyTextArea.className = "form-control placeholder card-description-textarea";
                    cardBodyTextArea.setAttribute("rows", "3");
                    cardBodyTextArea.setAttribute("placeholder", "Digite a descrição da tarefa...");
                    cardBodyTextArea.value = obj["description"];
                    cardBody.appendChild(cardBodyTextArea);

                    card.appendChild(cardHeader);
                    card.appendChild(cardBody);
                    cardWrapper.appendChild(card);
                    container.appendChild(cardWrapper);

                })


            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        });



        return linhaId;
    });

    /* -------------------------------------------------------------------------- */
    /*              Adiciona os cards das tarefas na coluna do kanban             */
    /* -------------------------------------------------------------------------- */
    function addCard(containerId) {


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


    }

    /* -------------------------------------------------------------------------- */
    /*           Possibilida mover os cards das tarefas entre as colunas          */
    /* -------------------------------------------------------------------------- */
    $(document).ready(function() {



        $(".column-kanban").sortable({

            connectWith: ".column-kanban",
            handle: ".card-header",

            start: function(event, ui) {

                ui.item.data("originalParent", ui.item.parent());
                index = ui.item.index();
                column = ui.item.parent().attr("id");




            },
            stop: function(event, ui) {
                var originalParent = ui.item.data("originalParent");
                var targetColumn = ui.item.parent();
                var rowId = linhaId;

                if (!isValidTarget(targetColumn)) {
                    originalParent.append(ui.item);
                } else {

                }
            },

        }).disableSelection();

        function isValidTarget(targetColumn) {
            var validColumns = ["tarefas-pendentes", "tarefas-em-progresso", "tarefas-concluidas"];
            return validColumns.includes(targetColumn.closest(".col-md-4").attr("id"));
        }
    });

    /* -------------------------------------------------------------------------- */
    /*                          Salvar tasks kanban no bd                         */
    /* -------------------------------------------------------------------------- */
    $('#salvarButtonKanban').on('click', function() {

        var rowId = linhaId;

        var cardData = []; // Crie um array para armazenar os dados dos cards

        $(".card-wrapper").each(function() {
            var cardTitle = $(this).find(".card-title-textarea").val();
            var cardDescription = $(this).find(".card-description-textarea").val();
            var columnIndex = $(this).parent().attr("id");
            var indexChildren = $(this).index();

            cardData.push({
                title: cardTitle,
                description: cardDescription,
                column: columnIndex,
                index: indexChildren,
            });

        });


        // Enviar os dados dos cards para o servidor
        $.ajax({

            url: "ajax/processos.ajax.php",
            method: "POST",
            data: {
                rowId: rowId,
                cardData: cardData,
                action: 5,
            }, // Envie o ID da linha e os dados dos cards

            success: function(response) {

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
                        title: 'O Kanban não foi salvo!',

                    });
                }
            },
            error: function(error) {
                console.error("Erro ao salvar informações no servidor:", error);
            },


        });


    });

    /* -------------------------------------------------------------------------- */
    /*                      Limpar todas as tarefas do kanban                     */
    /* -------------------------------------------------------------------------- */
    $('#limparButtonKanban').on('click', function() {

        var rowId = linhaId;

        Swal.fire({
            title: 'Confirma limpar todos  os cartões?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'Sim, desejo limpar!',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Não'
        }).then((result) => {

            if (result.isConfirmed) {
                // Enviar os dados dos cards para o servidor
                $.ajax({
                    url: "ajax/processos.ajax.php",
                    method: "POST",
                    data: {
                        rowId: rowId,
                        action: 6,
                    }, // Envie o ID da linha e os dados dos cards

                    success: function(response) {

                        if (response == '"ok"') {
                            Toast.fire({
                                icon: 'success',
                                title: "Kanban limpo com sucesso!"
                            });
                        } else if (rowId == null) {
                            return "vazio";
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'O Kanban não foi limpo!',

                            });
                        }
                    },
                    error: function(error) {
                        console.error("Erro ao limpar informações no servidor:", error);
                    },


                });

                $(".card-wrapper").each(function() {
                    $(this).remove();
                });
            }
        });

    });

    /* -------------------------------------------------------------------------- */
    /*                      Deletar um único card  do kanban no BD                */
    /* -------------------------------------------------------------------------- */
    $(document).on("click", ".card-delete-button", function() {


        var rowId = linhaId;
        var column = $(this).closest(".card-wrapper").parent().attr("id");
        var index = $(this).closest(".card-wrapper").index();
        var carwrapper = $(this).closest(".card-wrapper");

        // Enviar os dados dos cards para o servidor
        $.ajax({
            url: "ajax/processos.ajax.php",
            method: "POST",
            data: {
                rowId: rowId,
                column: column,
                index: index,
                action: 7,
            }, // Envie o ID da linha e os dados dos cards

            success: function(response) {

                if (response == '"ok"') {
                    console.log("Card removido com sucesso!");
                    carwrapper.remove();
                } else if (rowId == null) {
                    return "vazio";
                } else {
                    console.log("Card não removido!");
                }
            },
            error: function(error) {
                console.error("Erro ao remover card no servidor:", error);
            },
        });


    });

    /* -------------------------------------------------------------------------- */
    /*                    Abre o modal do protocolo                               */
    /* -------------------------------------------------------------------------- */
    $("#example1").on("click", ".btnProtocoProcesso", function() {
        var data = table.row($(this).parents('tr')).data();
        linhaId = data[0];

        $("#mdlProtocoloProcesso").modal('show');

        var data = table.row($(this).parents('tr')).data();

        var meses = {
            "01": "JAN",
            "02": "FEV",
            "03": "MAR",
            "04": "ABR",
            "05": "MAI",
            "06": "JUN",
            "07": "JUL",
            "08": "AGO",
            "09": "SET",
            "10": "OUT",
            "11": "NOV",
            "12": "DEZ"
        };

        var dataSplit = data[10].split("-");
        var mes = meses[dataSplit[1]];
        var ano = dataSplit[0].substring(2);
        var novaData = dataSplit[2] + " " + mes + " " + ano + " ";

        $("#primeiraDataEntrada").html(novaData + '    <i class="fas fa-clock"></i> ' + ' <i class="fas fa-arrow-left" style="color: green;"></i> ');
        $("#labelPrimeiraDataEntrada").html(novaData);

        // Selecionar o elemento <span> com a id "primeiraDataEntrada"
        const spanElement = document.getElementById("primeiraDataEntrada");

        // Criar um novo elemento <h3>
        const novoH3 = document.createElement("h3");
        novoH3.className = "timeline-header no-border";

        // Criar um elemento <a> dentro do <h3>
        const novoA = document.createElement("a");
        novoA.href = "#";
        novoA.textContent = "<?php echo $_SESSION['usuario']->posto_grad . " " . $_SESSION['usuario']->nome_guerra ?>";

        // Adicionar o <a> dentro do <h3>
        novoH3.appendChild(novoA);

        // Adicionar o texto "Primeira entrada do processo" após o <a>
        novoH3.appendChild(document.createTextNode(" Primeira entrada do processo"));



        // Inserir o novo <h3> após o <span>
        spanElement.parentNode.insertBefore(novoH3, spanElement.nextSibling);
    });

    /* -------------------------------------------------------------------------- */
    /*      Adiciona os protocolos de entrada na timeline e salva no BD           */
    /* -------------------------------------------------------------------------- */
    function addProtocoloEntrada() {

        var rowId = linhaId;
        var foto = '<?php echo $_SESSION['usuario']->nome_guerra ?>'
        var nome = '<?php echo $_SESSION['usuario']->posto_grad . " " . $_SESSION['usuario']->nome_guerra ?>';
        // console.log("nome: " + nome);

        // Obter o valor da data de entrada
        var dataEntradaBD = document.getElementById("DataEntradaProtocolo").value;
        var dataEntrada = document.getElementById("DataEntradaProtocolo").value;
        var meses = {
            "01": "JAN",
            "02": "FEV",
            "03": "MAR",
            "04": "ABR",
            "05": "MAI",
            "06": "JUN",
            "07": "JUL",
            "08": "AGO",
            "09": "SET",
            "10": "OUT",
            "11": "NOV",
            "12": "DEZ"
        };
        var dataSplit = dataEntrada.split("-");
        var mes = meses[dataSplit[1]];
        var ano = dataSplit[0].substring(2);
        dataEntrada = dataSplit[2] + " " + mes + " " + ano + " ";
        // console.log("dataEntrada: " + dataEntrada);

        // Obter o valor do motivo da entrada
        var motivoEntrada = document.getElementById("idMotivoEntradaProtocolo").value;
        // console.log("motivoEntrada: " + motivoEntrada);

        // Criar uma nova div com a classe "protocolo"
        var novaDiv = document.createElement("div");
        novaDiv.classList.add("protocolo");

        // Adiciona um icone para a div protocolo 
        novaDiv.innerHTML = '<img src="views/assets/dist/img/' + foto + '.jpg" class="img-circle elevation-3 imagemModalProtocolo ml-3">'



        // Criar uma nova div com a classe "timeline-item"
        var novaDivTimelineItem = document.createElement("div");
        novaDivTimelineItem.classList.add("timeline-item");

        // Adicionar span com a data de entrada à nova div "timeline-item"
        novoSpan = document.createElement("span");
        novoSpan.classList.add("time");
        novoSpan.setAttribute("id", "DataEntrada");
        novoSpan.innerHTML = dataEntrada + '    <i class="fas fa-clock"></i> ' + ' <i class="fas fa-arrow-left" style="color: green;"></i> ';
        novaDivTimelineItem.appendChild(novoSpan);

        // Criar um novo elemento "h3" para inserir os dados do formulário exceto a data que será no span
        var novoElementoH3 = document.createElement("h3");
        novoElementoH3.classList.add("timeline-header");
        novoElementoH3.classList.add("no-border");


        // Criar um novo elemento "a" para inserir o nome do usuário
        var novoElementoA = document.createElement("a");
        novoElementoA.setAttribute("href", "#");
        novoElementoA.innerText = "( " + nome + ") ";

        // Inserir o novo elemento "a" no H3
        novoElementoH3.appendChild(novoElementoA);

        // Criar um novo elemento "span" para inserir o motivo
        var novoElementoSpan = document.createElement("span");
        var textoMotivo = "Motivo: ";
        novoElementoSpan.innerHTML = "<br>" + textoMotivo.bold() + motivoEntrada + "<br>";

        // Inserir o novo elemento "a" no "H3"
        novoElementoH3.appendChild(novoElementoSpan);

        // Adicionar o H3 à nova div "timeline-item"
        novaDivTimelineItem.appendChild(novoElementoH3);

        // Adicionar a nova div "timeline-item" à nova div "protocolo"
        novaDiv.appendChild(novaDivTimelineItem);

        // Adicionar a nova div "protocolo" após a última div com a classe "protocolo"
        var divsProtocolo = document.querySelectorAll(".protocolo");
        var ultimaDivProtocolo = divsProtocolo[divsProtocolo.length - 1];
        ultimaDivProtocolo.parentNode.insertBefore(novaDiv, divsProtocolo[0]);

        $.ajax({
            url: "ajax/processos.ajax.php",
            method: "POST",
            data: {
                foto: foto,
                nome: nome,
                rowId: rowId,
                dataEntrada: dataEntradaBD,
                motivoEntrada: motivoEntrada,
                action: 10,
            }, // Envie o ID da linha e os dados dos cards editados
            success: function(response) {
                if (response == '"ok"') {
                    console.log("Protocolo adicionado com sucesso!");
                } else {
                    console.log("Erro ao adicionar protocolo: " + response);

                }
            },
            error: function(error) {
                concole.error("Erro ao salvar as informações do protocolo no servidor:", error);
            }

        })


    }

    /* -------------------------------------------------------------------------- */
    /*      Adiciona os protocolos de saída  na timeline e salva no BD            */
    /* -------------------------------------------------------------------------- */
    function addProtocoloSaida() {

        var rowId = linhaId;
        var foto = '<?php echo $_SESSION['usuario']->nome_guerra ?>'
        var nome = '<?php echo $_SESSION['usuario']->posto_grad . " " . $_SESSION['usuario']->nome_guerra ?>';


        // Obter o valor da data de entrada
        var dataSaidaBD = document.getElementById("DataSaidaProtocolo").value;
        var dataSaida = document.getElementById("DataSaidaProtocolo").value;
        var meses = {
            "01": "JAN",
            "02": "FEV",
            "03": "MAR",
            "04": "ABR",
            "05": "MAI",
            "06": "JUN",
            "07": "JUL",
            "08": "AGO",
            "09": "SET",
            "10": "OUT",
            "11": "NOV",
            "12": "DEZ"
        };
        var dataSplit = dataSaida.split("-");
        var mes = meses[dataSplit[1]];
        var ano = dataSplit[0].substring(2);
        dataSaida = dataSplit[2] + " " + mes + " " + ano + " ";
        // console.log("dataSaida: " + dataSaida);

        // Obter o valor do motivo da entrada
        // var motivoEntrada = document.getElementById("idMotivoEntradaProtocolo").value;
        // console.log("motivoEntrada: " + motivoEntrada);
        // Obter o valor da data de saída
        // var dataSaida = document.getElementById("DataSaídaProtocolo").value;

        // Obter o valor do nome do quem recebeu o documento
        var quemRecebeu = document.getElementById("quemRecebeu").value;

        // Obter o valor do motivo da saída
        var motivoSaida = document.getElementById("MotivoSaídaProtocolo").value;

        // Criar uma nova div com a classe "protocolo"
        var novaDiv = document.createElement("div");
        novaDiv.classList.add("protocolo");

        // Adiciona um icone para a div protocolo 
        novaDiv.innerHTML = '<img src="views/assets/dist/img/<?php echo $_SESSION['usuario']->nome_guerra ?>.jpg" class="img-circle elevation-3 imagemModalProtocolo ml-3">';

        // Criar uma nova div com a classe "timeline-item"
        var novaDivTimelineItem = document.createElement("div");
        novaDivTimelineItem.classList.add("timeline-item");

        // Adicionar span com a data de entrada à nova div "timeline-item"
        novoSpan = document.createElement("span");
        novoSpan.classList.add("time");
        novoSpan.setAttribute("id", "dataSaida");
        novoSpan.innerHTML = dataSaida + '<i class="fas fa-clock"></i> ' + '  <i class="fas fa-arrow-right" style="color: red;"></i> ';
        novaDivTimelineItem.appendChild(novoSpan);

        // Criar um novo elemento "h3" para inserir os dados do formulário exceto a data que será no span
        var novoElementoH3 = document.createElement("h3");
        novoElementoH3.classList.add("timeline-header");
        novoElementoH3.classList.add("no-border");

        // Criar um novo elemento "a" para inserir o nome do usuário
        var novoElementoA = document.createElement("a");
        novoElementoA.setAttribute("href", "#");
        novoElementoA.innerText = "( <?php echo $_SESSION['usuario']->posto_grad . " " . $_SESSION['usuario']->nome_guerra ?> ) ";

        // Inserir o novo elemento "a" no H3
        novoElementoH3.appendChild(novoElementoA);

        // Criar um novo elemento "span" para inserir o motivo
        var novoElementoSpan = document.createElement("span");
        var textoMotivo = "Motivo: ";
        var textoEntregueAo = "Entregue ao(à): ";
        novoElementoSpan.innerHTML = "<br>" + textoMotivo.bold() + motivoSaida + "<br>" + textoEntregueAo.bold() + quemRecebeu;

        // Inserir o novo elemento "a" no "H3"
        novoElementoH3.appendChild(novoElementoSpan);

        // Adicionar o H3 à nova div "timeline-item"
        novaDivTimelineItem.appendChild(novoElementoH3);

        // Adicionar a nova div "timeline-item" à nova div "protocolo"
        novaDiv.appendChild(novaDivTimelineItem);

        // Adicionar a nova div "protocolo" após a última div com a classe "protocolo"
        var divsProtocolo = document.querySelectorAll(".protocolo");
        var ultimaDivProtocolo = divsProtocolo[divsProtocolo.length - 1];
        ultimaDivProtocolo.parentNode.insertBefore(novaDiv, divsProtocolo[0]);

        $.ajax({
            url: "ajax/processos.ajax.php",
            method: "POST",
            data: {
                rowId: rowId,
                dataSaida: dataSaidaBD,
                quemRecebeu: quemRecebeu,
                motivoSaida: motivoSaida,
                foto: foto,
                nome: nome,
                action: 11,
            }, // Envie o ID da linha e os dados dos cards editados
            success: function(response) {
                if (response == '"ok"') {
                    console.log("Protocolo adicionado com sucesso!");
                } else {
                    console.log("Erro ao adicionar protocolo: " + response);

                }
            },
            error: function(error) {
                concole.error("Erro ao salvar as informações do protocolo no servidor:", error);
            }

        })


    }
</script>
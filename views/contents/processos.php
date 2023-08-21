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
                                    <th> </th>
                                    <th>%</th>
                                    <th>NUP</th>
                                    <th>Processo Origem</th>
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
<!-- Ajax scripts -->
<script>
    var Toast = swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });


    var table;
    var action;

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



            columnDefs: [{
                    targets: 0,
                    orderable: false,
                    className: 'control'
                },

                {
                    targets: 7,
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

        })

        /* -------------------------------------------------------------------------- */
        /*             Limpar inputs do modal al cancelar ou fechar modal             */
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
    });

    document.getElementById("salvarButton").addEventListener("click", function() {

        var forms = document.getElementsByClassName("needs-validation");

        var validation = Array.prototype.filter.call(forms, function(form) {

            if (form.checkValidity() === true) {
                console.log("Preenchimento válido")

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

                        dados.append("action", 2);
                        dados.append("idNup", $("#idNup").val());
                        dados.append("selProcesso", $("#selProcesso").val());
                        dados.append("idNrProcesso", $("#idNrProcesso").val());
                        dados.append("selRequisitante", $("#selRequisitante").val());
                        dados.append("selFase", $("#selFase").val());
                        dados.append("idDescricaoResumida", $("#idDescricaoResumida").val());
                        dados.append("idDescricaoDetalhada", $("#idDescricaoDetalhada").val());
                        dados.append("idDataEntrada", $("#idDataEntrada").val());


                        // Exibir os dados no console
                        console.log("Dados do Formulário:");
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
                                        title: 'Processo cadastrado com sucesso!'
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

    document.getElementById("cancelarButton").addEventListener("click", function() {

        $(".needs-validation").removeClass("was-validated");
    });
</script>
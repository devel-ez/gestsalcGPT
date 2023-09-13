<?php

require_once "../controllers/processos.controller.php";
require_once "../models/processos.model.php";

class AjaxProcessos
{
    public $idNup;
    public $analista;
    public $selProcesso;
    public $idNrProcesso;
    public $selRequisitante;
    public $selFase;
    public $idDescricaoResumida;
    public $idDescricaoDetalhada;
    public $idDataEntrada;


    // public function ajaxGetDataProcessos()
    // {
    //     $data = ProcessosController::ctrGetDataProcessos();

    //     echo json_encode($data);
    // }

    public function ajaxListarProcessos()
    {
        $processos = ProcessosController::ctrListarProcessos();

        echo json_encode($processos);
    }

    public function ajaxRegistrarProcessos()
    {
        $processos = ProcessosController::ctrRegistrarProcessos(
            $this->idNup,
            $this->analista,
            $this->selProcesso,
            $this->idNrProcesso,
            $this->selRequisitante,
            $this->selFase,
            $this->idDescricaoResumida,
            $this->idDescricaoDetalhada,
            $this->idDataEntrada
        );

        echo json_encode($processos);
    }

    public function ajaxEditarProcesso($data)
    {
        $table = "processos";
        $id = $_POST["idId"];
        $nameId = "id_processos";

        $response = ProcessosController::ctrEditarProcesso($table, $data, $id, $nameId);

        echo json_encode($response);
    }
    public function ajaxDeletarProcesso()
    {
        $table = "processos";
        $id = $_POST["idId"];
        $nameId = "id_processos";

        $response = ProcessosController::ctrDeletarProcesso($table, $id, $nameId);

        echo json_encode($response);
    }

    public function ajaxLimparTodosCardsKanban($rowId)
    {

        $response = ProcessosController::ctrLimparTodosCardsKanban($rowId);
        echo json_encode($response);
    }
    public function ajaxRegistrarTarefasKanban($rowId, $cardData)
    {
        $response = ProcessosController::ctrRegistrarTarefasKanban($rowId, $cardData);

        echo json_encode($response);
    }

    public function ajaxDeletarUnicoCardKanban($rowId, $column, $index)
    {

        $response = ProcessosController::ctrDeletarUnicoCardKanban($rowId, $column, $index);

        echo json_encode($response);
    }

    public function ajaxGetKanbanTasks()
    {
        $data = ProcessosController::ctrGetKanbanTasks();

        echo json_encode($data);
    }

    public function ajaxListarUsuarios()
    {
        $usuarios = ProcessosController::ctrListarUsuarios();

        echo json_encode($usuarios);
    }
}

if (isset($_POST['action']) && $_POST['action'] == 1) { // Listar processos

    $processos = new AjaxProcessos();
    $processos->ajaxListarProcessos();
} else if (isset($_POST['action']) && $_POST['action'] == 2) { // Registrar processos    

    $processos = new AjaxProcessos();


    $processos->idNup = $_POST['idNup'];
    $processos->analista = $_POST['selAnalista'];
    $processos->selProcesso = $_POST['selProcesso'];
    $processos->idNrProcesso = $_POST['idNrProcesso'];
    $processos->selRequisitante = $_POST['selRequisitante'];
    $processos->selFase = $_POST['selFase'];
    $processos->idDescricaoResumida = $_POST['idDescricaoResumida'];
    $processos->idDescricaoDetalhada = $_POST['idDescricaoDetalhada'];
    $processos->idDataEntrada = $_POST['idDataEntrada'];

    $processos->ajaxRegistrarProcessos();
} else if (isset($_POST['action']) && $_POST['action'] == 3) { // Editar processos 

    $editarProcesso = new AjaxProcessos;

    $data = array(

        'NUP' => $_POST['idNup'],
        'analista' => $_POST['selAnalista'],
        'tipo_processo_origem' => $_POST['selProcesso'],
        'numero_processo_origem' => $_POST['idNrProcesso'],
        'requisitante' => $_POST['selRequisitante'],
        'situacao' => $_POST['selFase'],
        'assunto_objeto' => $_POST['idDescricaoResumida'],
        'descricao_detalhada_objeto' => $_POST['idDescricaoDetalhada'],
        'primeira_data_entrada' => $_POST['idDataEntrada'],

    );

    $editarProcesso->ajaxEditarProcesso($data);
} else if (isset($_POST['action']) && $_POST['action'] == 4) { // Deletar processo

    $deletarProcesso = new AjaxProcessos;
    $deletarProcesso->ajaxDeletarProcesso();
} else if (isset($_POST['action']) && $_POST['action'] == 5) { // Cadastrar as informações dos cards do kanban por processo

    $cadastrarInfoTarefasKanban = new AjaxProcessos;
    $cadastrarInfoTarefasKanban->ajaxRegistrarTarefasKanban($_POST['rowId'], $_POST['cardData']);
} else if (isset($_POST['action']) && $_POST['action'] == 6) { // Limpar todos cards do kanban no BD

    $limparTodasTarefas = new AjaxProcessos;
    $limparTodasTarefas->ajaxLimparTodosCardsKanban($_POST['rowId']);
} else if (isset($_POST['action']) && $_POST['action'] == 7) { // Remover card do kanban e no BD

    $removerCard = new AjaxProcessos;
    $removerCard->ajaxDeletarUnicoCardKanban($_POST['rowId'], $_POST['column'], $_POST['index']);
} else if (isset($_POST['action']) && $_POST['action'] == 8) { // Get card do kanban e no BD

    $getCardKanbanBd = new AjaxProcessos;
    $getCardKanbanBd->ajaxGetKanbanTasks();
} else if (isset($_POST['action']) && $_POST['action'] == 9) { // Listar usuarios

    $usuarios = new AjaxProcessos();
    $usuarios->ajaxListarUsuarios();
} else {

    echo '<pre>';
    print_r("deu erro nas actions do ajax.php");
    echo '</pre>';
}

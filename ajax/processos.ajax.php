<?php

require_once "../controllers/processos.controller.php";
require_once "../models/processos.model.php";

class AjaxProcessos
{
    public $idNup;
    public $selProcesso;
    public $idNrProcesso;
    public $selRequisitante;
    public $selFase;
    public $idDescricaoResumida;
    public $idDescricaoDetalhada;
    public $idDataEntrada;


    public function ajaxGetDataProcessos()
    {
        $data = ProcessosController::ctrGetDataProcessos();

        echo json_encode($data);
    }

    public function ajaxListarProcessos()
    {
        $processos = ProcessosController::ctrListarProcessos();

        echo json_encode($processos);
    }

    public function ajaxRegistrarProcessos()
    {
        $processos = ProcessosController::ctrRegistrarProcessos(
            $this->idNup,
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
    public function ajaxRegistrarTarefasKanban($rowId, $cardData)
    {

        $response = ProcessosController::ctrRegistrarTarefasKanban($rowId, $cardData);

        echo json_encode($response);
    }
}

if (isset($_POST['action']) && $_POST['action'] == 1) { // Listar processos

    $processos = new AjaxProcessos();
    $processos->ajaxListarProcessos();
} else if (isset($_POST['action']) && $_POST['action'] == 2) { // Registrar processos    

    $processos = new AjaxProcessos();

    $processos->idNup = $_POST['idNup'];
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
        'tipo_processo_origem' => $_POST['selProcesso'],
        'numero_processo_origem' => $_POST['idNrProcesso'],
        'requisitante' => $_POST['selRequisitante'],
        'situacao' => $_POST['selFase'],
        'assunto_objeto' => $_POST['idDescricaoResumida'],
        'descricao_detalhada_objeto' => $_POST['idDescricaoDetalhada'],
        'data_entrada' => $_POST['idDataEntrada'],

    );

    // foreach ($data as $key => $value) {
    //     echo "$key: $value\n";
    // }
    $editarProcesso->ajaxEditarProcesso($data);
} else if (isset($_POST['action']) && $_POST['action'] == 4) { // Deletar processo

    $deletarProcesso = new AjaxProcessos;
    $deletarProcesso->ajaxDeletarProcesso();
} else if (isset($_POST['action']) && $_POST['action'] == 5) { // Cadastrar as informações dos cards do kanban por processo

    $registrarTarefasKanban = new AjaxProcessos;
    $registrarTarefasKanban->ajaxRegistrarTarefasKanban($_POST['rowId'], $_POST['cardData']);
} else {
    echo '<pre>';
    print_r("parou aqui no ajax");
    echo '</pre>';
}

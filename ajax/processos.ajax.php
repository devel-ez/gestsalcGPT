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
} else {
    echo '<pre>';
    print_r("parou aqui no ajax");
    echo '</pre>';
}

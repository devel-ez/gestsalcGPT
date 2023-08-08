<?php

require_once "../controllers/processos.controller.php";
require_once "../models/processos.model.php";

class AjaxProcessos{

    public function getDataProcessos(){
        $data = ProcessosController::ctrGetDataProcessos();

        echo json_encode($data);
    }
}


$data = new AjaxProcessos();
$data -> getDataProcessos();